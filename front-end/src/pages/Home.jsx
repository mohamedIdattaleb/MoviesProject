import { useState, useEffect, useCallback } from "react";
import NavBar from "../composent/NavBar";
import axios from "axios";
import { motion } from "framer-motion";
import "./Home.css";

function Home() {
    const [name, setName] = useState("");
    const [showHello, setShowHello] = useState(true);
    const [dots, setDots] = useState("");
    const [movies, setMovies] = useState([]);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);

    useEffect(() => {
        document.title = "Home";
        const storedName = localStorage.getItem("username");
        if (storedName) setName(storedName);

        const interval = setInterval(() => {
            setShowHello((prev) => !prev);
        }, 3000);

        return () => clearInterval(interval);
    }, []);

    useEffect(() => {
        const dotsInterval = setInterval(() => {
            setDots((prev) => (prev.length < 3 ? prev + "." : ""));
        }, 900);
        return () => clearInterval(dotsInterval);
    }, []);

    // Fonction de récupération des films avec useCallback pour éviter les re-render inutiles
    const fetchMovies = useCallback(async () => {
        setLoading(true);
        try {
            const response = await axios.get("http://localhost:8000/api/v1/movies");
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

    return (
        <div className="container">
            <NavBar />
            <h1 className="hello">
                {showHello ? `Hello, ${name}` : "Enjoy"}{dots}
            </h1>

            {/* Affichage du chargement */}
            {loading ? (
                <p className="loading">Chargement des films...</p>
            ) : error ? (
                <p className="error">{error}</p>
            ) : (
                <motion.div className="slider" initial={{ opacity: 0 }} animate={{ opacity: 1 }} transition={{ duration: 1 }}>
                    {movies.map((movie, index) => (
                        <motion.img 
                            key={index} 
                            src={movie.image_path} 
                            alt={movie.title} 
                            whileHover={{ scale: 1.05 }} 
                            className="movie-image"
                        />
                    ))}
                </motion.div>
            )}
        </div>
    );
}

export default Home;
