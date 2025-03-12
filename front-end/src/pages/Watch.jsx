import { useParams, useLocation } from "react-router-dom";
import { useState, useEffect } from "react";
import axios from "axios";
import "./Watch.css";

const API_URL = "http://localhost:8000/api/v1";

function Watch() {
    const { id } = useParams();
    const location = useLocation();
    const [content, setContent] = useState(null);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);

    // Déterminer si c'est un film ou une série
    const type = location.pathname.includes("movie") ? "movies" : "series";

    useEffect(() => {
        const fetchContent = async () => {
            try {
                const response = await axios.get(`${API_URL}/${type}/${id}`);
                setContent(response.data);
            } catch (err) {
                setError("Ce contenu n'existe pas.");
            } finally {
                setLoading(false);
            }
        };

        fetchContent();
    }, [id, type]);

    if (loading) return <p>Chargement du contenu...</p>;
    if (error) return <p>{error}</p>;

    return (
        <div className="watch-page">
            <h1>{content.title}</h1>
            <img src={content.image_path} alt={content.title} />
            <p>{content.description}</p>
            <button>Play</button>
        </div>
    );
}

export default Watch;
