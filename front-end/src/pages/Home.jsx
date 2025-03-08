import { useState, useEffect, useCallback } from "react";
import NavBar from "../composent/NavBar";
import "./Home.css";
import axios from "axios";

function Home() {
    const [name, setName] = useState("");
    const [movies, setMovies] = useState([]);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);
    const [currentIndex, setCurrentIndex] = useState(0);
    const [isHovered, setIsHovered] = useState(false); // Pour arrêter l'autoplay au survol

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

    // Changement automatique d'image toutes les 5 secondes
    useEffect(() => {
        if (movies.length === 0 || isHovered) return;

        const interval = setInterval(() => {
            setCurrentIndex((prevIndex) => (prevIndex + 1) % movies.length);
        }, SLIDER_INTERVAL);

        return () => clearInterval(interval);
    }, [movies, isHovered]);

    // Fonctions de navigation manuelle
    const goToPrevious = () => {
        setCurrentIndex((prevIndex) => (prevIndex === 0 ? movies.length - 1 : prevIndex - 1));
    };

    const goToNext = () => {
        setCurrentIndex((prevIndex) => (prevIndex + 1) % movies.length);
    };

    // Gestion du survol
    const handleMouseEnter = () => setIsHovered(true);
    const handleMouseLeave = () => setIsHovered(false);

    if (loading) return <p className="loading">Chargement des films...</p>;
    if (error) return <p className="error">{error}</p>;

    return (
        <div className="container">
            <NavBar />
            <h1 className="hello">Hello, {name}</h1>

            {/* Slider principal */}
            <div 
                className="slider-container"
                onMouseEnter={handleMouseEnter}
                onMouseLeave={handleMouseLeave}
            >
                <AnimatePresence mode="wait">
                    <motion.div
                        key={movies[currentIndex].id}
                        className="slider-image-container"
                        initial={{ opacity: 0 }}
                        animate={{ opacity: 1 }}
                        exit={{ opacity: 0 }}
                        transition={{ duration: 1 }}
                    >
                        <img 
                            src={movies[currentIndex].image_path} 
                            alt={movies[currentIndex].title} 
                            className="slider-image"
                        />
                        <div className="slider-content">
                            <h2 className="slider-title">{movies[currentIndex].title}</h2>
                            <p className="slider-description">{movies[currentIndex].description}</p>
                            <button className="slider-watch-btn">Watch Now</button>
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
                </section>
            </main>
        </div>
    );
}

export default Home;