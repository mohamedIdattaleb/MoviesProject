import { useState, useEffect, useCallback } from "react";
import NavBar from "../composent/NavBar";
import Footer from "../composent/Foter";
import axios from "axios";
import { motion } from "framer-motion";
import "./Home.css";

const API_URL = "http://localhost:8000/api/v1/movies";

const sliderMovies = [
    {
        title: "Harry Potter",
        image: "https://miro.medium.com/v2/resize:fit:1400/1*-xxH5kXE8AGA8-vzPURslg.jpeg",
    },
    {
        title: "The Matrix",
        image: "https://townsquare.media/site/442/files/2018/05/the-matrix-reloaded.jpg?w=1200&h=0&zc=1&s=0&a=t&q=89&format=natural",
    },
    {
        title: "Interstellar",
        image: "https://static1.moviewebimages.com/wordpress/wp-content/uploads/2024/07/cooper-stares-into-the-void-of-space-in-interstellar.jpg",
    },
    {
        title: "The Hangover",
        image: "https://images.bauerhosting.com/legacy/empire-tmdb/films/18785/images/39LohvXfll5dGCQIV9B9VJ16ImE.jpg?ar=16%3A9&fit=crop&crop=top&auto=format&w=1440&q=80",
    },
    {
        title: "The Conjuring",
        image: "https://www.nme.com/wp-content/uploads/2019/04/PMBD9E-scaled.jpg",
    },
];

function Home() {
    const [name, setName] = useState("");
    const [movies, setMovies] = useState([]);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);
    const [currentIndex, setCurrentIndex] = useState(0);

    useEffect(() => {
        document.title = "Home";
        const storedName = localStorage.getItem("username");
        if (storedName) setName(storedName);
    }, []);

    const fetchMovies = useCallback(async () => {
        setLoading(true);
        try {
            const response = await axios.get(API_URL);
            setMovies(response.data.data);
        } catch (err) {
            setError("Une erreur est survenue lors du chargement des films.");
        } finally {
            setLoading(false);
        }
    }, []);

    useEffect(() => {
        fetchMovies();
    }, [fetchMovies]);

    // Navigation manuelle du slider
    const goToPrevious = () => {
        setCurrentIndex((prevIndex) => (prevIndex === 0 ? sliderMovies.length - 1 : prevIndex - 1));
    };

    const goToNext = () => {
        setCurrentIndex((prevIndex) => (prevIndex + 1) % sliderMovies.length);
    };

    if (loading) return <p className="loading">Chargement des films...</p>;
    if (error) return <p className="error">{error}</p>;

    return (
        <div className="container">
            <NavBar />
            <h1 className="hello">Welcome {name}</h1>

            {/* Slider principal (manuel) */}
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
                    <h1 className="title">{sliderMovies[currentIndex].title}</h1>
                    <button className="watch">Watch</button>
                </motion.div>

                {/* Boutons de navigation */}
                <button className="prev" onClick={goToPrevious}>‹</button>
                <button className="next" onClick={goToNext}>›</button>

                {/* Indicateurs de position */}
                <div className="slider-nav">
                    {sliderMovies.map((_, index) => (
                        <span
                            key={index}
                            className={index === currentIndex ? "active" : ""}
                            onClick={() => setCurrentIndex(index)}
                        ></span>
                    ))}
                </div>
            </div>

            {/* Liste des films depuis l'API */}
            <div className="movie-grid">
                {movies.map((movie, index) => (
                    <motion.div key={index} className="movie-card" whileHover={{ scale: 1.05 }}>
                        <img src={movie.image_path} alt={movie.title} />
                        <div className="title">{movie.title}</div>
                        <button className="watch-btn">Watch Now</button>
                    </motion.div>
                ))}
            </div>

            <Footer />
        </div>
    );
}

export default Home;
