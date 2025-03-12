import { useState, useEffect, useCallback } from "react";
import { useNavigate } from "react-router-dom";
import NavBar from "../composent/NavBar";
import Footer from "../composent/Foter";
import axios from "axios";
import { motion } from "framer-motion";
import "./Home.css";

const API_URL = "http://localhost:8000/api/v1/movies";
const API_URL2 = "http://localhost:8000/api/v1/series";

const sliderMovies = [
    {
        title: "Harry Potter",
        image: "https://miro.medium.com/v2/resize:fit:1400/1*-xxH5kXE8AGA8-vzPURslg.jpeg",
        description: "Join Harry and his friends in a magical adventure through the wizarding world."
    },
    {
        title: "The Matrix",
        image: "https://townsquare.media/site/442/files/2018/05/the-matrix-reloaded.jpg?w=1200&h=0&zc=1&s=0&a=t&q=89&format=natural",
        description: "A computer hacker learns from mysterious rebels about the true nature of his reality."
    },
    {
        title: "Interstellar",
        image: "https://static1.moviewebimages.com/wordpress/wp-content/uploads/2024/07/cooper-stares-into-the-void-of-space-in-interstellar.jpg",
        description: "A team of explorers travel through a wormhole in space in an attempt to ensure humanity's survival."
    },
    {
        title: "The Hangover",
        image: "https://images.bauerhosting.com/legacy/empire-tmdb/films/18785/images/39LohvXfll5dGCQIV9B9VJ16ImE.jpg?ar=16%3A9&fit=crop&crop=top&auto=format&w=1440&q=80",
        description: "A Las Vegas bachelor party turns into a wild adventure as three friends try to remember what happened."
    },
    {
        title: "The Conjuring",
        image: "https://www.nme.com/wp-content/uploads/2019/04/PMBD9E-scaled.jpg",
        description: "Paranormal investigators work to help a family terrorized by a dark presence."
    },
];


function Home() {
    const [name, setName] = useState("");
    const [movies, setMovies] = useState([]);
    const [series, setSeries] = useState([]);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);
    const [currentIndex, setCurrentIndex] = useState(0);
    const navigate = useNavigate();
    const sliderMovie = sliderMovies[currentIndex];
    const matchedMovie = movies.find(movie => movie.title === sliderMovie.title);

    const handleWatchClick = (id, type) => {
        const url = type === "movie" ? `/watch/movie/${id}` : `/watch/series/${id}`;
        navigate(url);
    };

    useEffect(() => {
        document.title = "Home";
        const storedName = localStorage.getItem("username");
        if (storedName) setName(storedName);
    }, []);

    useEffect(() => {
        const interval = setInterval(() => {
            setCurrentIndex(prevIndex => (prevIndex + 1) % sliderMovies.length);
        }, 5000);

        return () => clearInterval(interval);
    }, []);


    const fetchData = useCallback(async (url, setter, errorMessage) => {
        try {
            const response = await axios.get(url);
            setter(response.data || []);
        } catch (err) {
            setError(errorMessage);
            setter([]);
        }
    }, []);

    useEffect(() => {
        fetchData(API_URL, setMovies, "Erreur lors du chargement des films.");
        fetchData(API_URL2, setSeries, "Erreur lors du chargement des séries.");
        setLoading(false);
    }, [fetchData]);

    const goToPrevious = () => {
        setCurrentIndex(prevIndex => (prevIndex === 0 ? sliderMovies.length - 1 : prevIndex - 1));
    };

    const goToNext = () => {
        setCurrentIndex(prevIndex => (prevIndex + 1) % sliderMovies.length);
    };

    if (loading) return <p className="loading">Chargement des films...</p>;
    if (error) return <p className="error">{error}</p>;

    return (
        <div className="container">
            <NavBar />
            <h1 className="hello">Welcome {name}</h1>

            <div className="slider">
                <motion.div
                    key={currentIndex}
                    initial={{ opacity: 0, x: 100 }}
                    animate={{ opacity: 1, x: 0 }}
                    exit={{ opacity: 0, x: -100 }}
                    transition={{ duration: 0.8 }}
                    className="slide"
                >
                    <img src={sliderMovies[currentIndex].image} alt={sliderMovies[currentIndex].title} />
                    <div className="slider-content">
                        <h1 className="title">{sliderMovies[currentIndex].title}</h1>
                        <p className="description">{sliderMovies[currentIndex].description}</p>
                        <button
                            className="watch-now"
                            onClick={() => matchedMovie ? handleWatchClick(matchedMovie.id, "movie") : alert("Ce film n'est pas disponible !")}
                            disabled={!matchedMovie}
                        >
                            Watch Now
                        </button>
                    </div>
                </motion.div>
                <button className="prev" onClick={goToPrevious}>‹</button>
                <button className="next" onClick={goToNext}>›</button>
            </div>


            <h2 className="h">List Of Movies</h2>
            <div className="movie-grid">
                {movies.map((movie, index) => (
                    <motion.div key={index} className="movie-card" whileHover={{ scale: 1.05 }}>
                        <img src={movie.image_path} alt={movie.title} />
                        <div className="title">{movie.title}</div>
                        <button className="watch-btn" onClick={() => handleWatchClick(movie.id, "movie")}>Watch Now</button>
                    </motion.div>
                ))}
            </div>

            <h2 className="h">List Of Series</h2>
            <div className="movie-grid">
                {series.map((serie, index) => (
                    <motion.div key={index} className="movie-card" whileHover={{ scale: 1.05 }}>
                        <img src={serie.image_path} alt={serie.title} />
                        <div className="title">{serie.title}</div>
                        <button className="watch-btn" onClick={() => handleWatchClick(serie.id, "series")}>Watch Now</button>
                    </motion.div>
                ))}
            </div>
            <Footer />
        </div>
    );
}

export default Home;
