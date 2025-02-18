import { useState, useEffect } from "react";
import NavBar from "../composent/NavBar";
import "./Home.css";
import axios from "axios";
function Home() {
    const [name, setName] = useState("");
    const [showHello, setShowHello] = useState(true);
    const [dots, setDots] = useState(""); // لحفظ عدد النقاط
    const [data, setData] = useState([]);
    const [error, setError] = useState(null);

    useEffect(() => {
        document.title = "Home";
        const storedName = localStorage.getItem("username");
        if (storedName) {
            setName(storedName);
        }

        const interval = setInterval(() => {
            setShowHello(prev => !prev);
        }, 3000);

        return () => clearInterval(interval);

    }, []);

    useEffect(() => {
        const dotsInterval = setInterval(() => {
            setDots(prev => (prev.length < 3 ? prev + '.' : ''));
        }, 900); // كل ثانية يضيف نقطة

        return () => clearInterval(dotsInterval);
    }, []);

    useEffect(() => {

        const fetchdata = async () => {
            try {
                const resp = await axios.get("http://localhost:8000/api/v1/movies");
                setData(resp.data.data);
                console.log(resp.data);

            }
            catch (error) {
                console.log(error);
                setError("Failed to fetch movies.");

            }
        }
        fetchdata();
    }, []);
    return (
        <div className="container">
            <NavBar />
            <h1 className="hello">
                {showHello ? `Hello, ${name}` : "Enjoy"}{dots}
            </h1>
            <div className="slider">
                {error && <p>{error}</p> }
                <div className="sliders">
                    {data.map((movie, index) => (
                        <img key={index} src={movie.image_path} alt={movie.title} />
                    ))}
                </div>
            </div>
        </div>
    );
}

export default Home;
