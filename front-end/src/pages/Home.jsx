import { useState, useEffect, useCallback, useRef } from "react";
import NavBar from "../composent/NavBar";
import Footer from "../composent/Foter";
import axios from "axios";
import { motion } from "framer-motion";
import "./Home.css";

const API_URL = "http://localhost:8000/api/v1/movies";
const API_URL2 = "http://localhost:8000/api/v1/series";

function Home() {
    const [name, setName] = useState("");
    const [movies, setMovies] = useState([]);
    const [series, setSeries] = useState([]);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);
    const [activeIndex, setActiveIndex] = useState(0);

    const sliderRef = useRef(null); // Create a reference for the slider

    useEffect(() => {
        document.title = "Home";
        const storedName = localStorage.getItem("username");
        if (storedName) setName(storedName);
    }, []);

    const fetchMovies = useCallback(async () => {
        setLoading(true);
        try {
            const Movie = await axios.get(API_URL);
            setMovies(Movie.data);
            console.log(Movie.data);
            
        } catch (err) {
            setError("Une erreur est survenue lors du chargement des films.");
        } finally {
            setLoading(false);
        }
    }, []);

    useEffect(() => {
        fetchMovies();
    }, [fetchMovies]);

    const fetchSeries = useCallback(async () => {
        setLoading(true);
        try {
            const response = await axios.get(API_URL2);
            setSeries(response.data || []); // Ensure series is always an array
            console.log("Series API Response:", response.data);
        } catch (err) {
            setError("Une erreur est survenue lors du chargement des séries.");
            setSeries([]); // Fallback to empty array on error
        } finally {
            setLoading(false);
        }
    }, []);
    

    useEffect(() => {
        fetchSeries();
    }, [fetchSeries]);

    // // Automatic slide change every 8 seconds
    // useEffect(() => {
    //     const interval = setInterval(() => {
    //         setActiveIndex(prevIndex => (prevIndex + 1) % 5); // Loops back after last slide
    //     }, 8000);

    //     return () => clearInterval(interval);
    // }, []);
    useEffect(() => {
        const slides = sliderRef.current?.children;
        if (slides) {
            slides[activeIndex]?.scrollIntoView({ behavior: "smooth" });
        }
    }, [activeIndex]);


    if (loading) return <p className="loading">Chargement des films...</p>;
    if (error) return <p className="error">{error}</p>;

    return (
        <div className="container">
            <NavBar />
            <h1 className="hello">Hello, {name}</h1>

            {/* Slider principal */}
            <div className="slider">
                <div className="sliders" ref={sliderRef}>
                    <div>
                        <img id="slide-1" src="https://miro.medium.com/v2/resize:fit:1400/1*-xxH5kXE8AGA8-vzPURslg.jpeg" alt="Movie 1" />
                        <h1 className="title">Harry Potter</h1>
                        <button className="watch">Watch</button>
                    </div>
                    <div>
                        <img id="slide-2" src="https://townsquare.media/site/442/files/2018/05/the-matrix-reloaded.jpg?w=1200&h=0&zc=1&s=0&a=t&q=89&format=natural" alt="Movie 2" />
                        <h1 className="title">The Matrix</h1>
                        <button className="watch">Watch</button>
                    </div>
                    <div>
                        <img id="slide-3" src="https://static1.moviewebimages.com/wordpress/wp-content/uploads/2024/07/cooper-stares-into-the-void-of-space-in-interstellar.jpg" alt="Movie 3" />
                        <h1 className="title">Interstellar</h1>
                        <button className="watch">Watch</button>
                    </div>
                    <div>
                        <img id="slide-4" src="https://images.bauerhosting.com/legacy/empire-tmdb/films/18785/images/39LohvXfll5dGCQIV9B9VJ16ImE.jpg?ar=16%3A9&fit=crop&crop=top&auto=format&w=1440&q=80" alt="Movie 4" />
                        <h1 className="title">The Hangover</h1>
                        <button className="watch">Watch</button>
                    </div>
                    <div>
                        <img id="slide-5" src="https://www.denofgeek.com/wp-content/uploads/2021/02/Valak-as-the-Nun-in-The-Conjuring-Movies.png?fit=1200%2C708" alt="Movie 5" />
                        <h1 className="title">The Conjuring</h1>
                        <button className="watch">Watch</button>
                    </div>
                </div>
                <div className="slider-nav">
                            {[...Array(5)].map((_, index) => (
                                <a
                                    key={index}
                                    href={`#slide-${index + 1}`}
                                    className={activeIndex === index ? "active" : ""}
                                    onClick={(e) => {
                                        e.preventDefault();
                                        setActiveIndex(index);
                                    }}
                                ></a>
                            ))}
                        </div>
            </div>

            {/* Liste des films */}
            <h2 className="h">List Of Movies</h2>
            <div className="movie-grid">
                
                {movies.map((movie, index) => (
                    <motion.div key={index} className="movie-card" whileHover={{ scale: 1.05 }}>
                        <img src={movie.image_path} alt={movie.title} />
                        <div className="title">{movie.title}</div>
                        <button className="watch-btn">Watch Now</button>
                    </motion.div>
                ))}
            </div>

            {/* Siries */}
            <h2 className="h">List Of Series</h2>
            <div className="movie-grid">
                
                {series.map((serie, index) => (
                    <motion.div key={index} className="movie-card" whileHover={{ scale: 1.05 }}>
                        <img src={serie.image_path} alt={serie.title} />
                        <div className="title">{serie.title}</div>
                        <button className="watch-btn">Watch Now</button>
                    </motion.div>
                ))}
            </div>
            <Footer />
        </div>

        

    );
}

export default Home;
