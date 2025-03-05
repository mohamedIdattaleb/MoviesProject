import { useState, useEffect, useRef } from "react";
import NavBar from "../composent/NavBar";
import "./Home.css";
import axios from "axios";

function Home() {
    const [name, setName] = useState("");
    const [data, setData] = useState([]);
    const [activeIndex, setActiveIndex] = useState(0);
    const sliderRef = useRef(null);

    useEffect(() => {
        document.title = "Home";
        const storedName = localStorage.getItem("username");
        if (storedName) {
            setName(storedName);
        }
    }, []);


    useEffect(() => {
        const fetchData = async () => {
            try {
                const resp = await axios.get("http://localhost:8000/api/v1/movies");
                setData(resp.data.data);
                console.log(resp.data);
            } catch (error) {
                console.log(error);
            }
        };
        fetchData();
    }, []);

    // Automatic slide change every 5 seconds
    useEffect(() => {
        const interval = setInterval(() => {
            setActiveIndex(prevIndex => (prevIndex + 1) % 5); // Loops back after last slide
        }, 8000);

        return () => clearInterval(interval);
    }, []);

    useEffect(() => {
        const slides = sliderRef.current?.children;
        if (slides) {
            slides[activeIndex]?.scrollIntoView({ behavior: "smooth" });
        }
    }, [activeIndex]);

    return (
        <div className="container">
            <NavBar />
            <main>
                <section>
                    <h1 className="hello">
                        Hello {name}
                    </h1>

                    <div className="slider">
                        <div className="sliders" ref={sliderRef}>
                            <div>
                                <img id="slide-1" src="https://miro.medium.com/v2/resize:fit:1400/1*-xxH5kXE8AGA8-vzPURslg.jpeg" alt="Movie 1" />
                                <h1 className="title">Harry Potter</h1>
                                <button className="watch">Wacth</button>
                            </div>
                            <div>
                                <img id="slide-2" src="https://townsquare.media/site/442/files/2018/05/the-matrix-reloaded.jpg?w=1200&h=0&zc=1&s=0&a=t&q=89&format=natural  " alt="Movie 2" />
                                <h1 className="title">The Matrix</h1>
                                <button className="watch">Wacth</button>
                            </div>
                            <div>
                                <img id="slide-3" src="https://static1.moviewebimages.com/wordpress/wp-content/uploads/2024/07/cooper-stares-into-the-void-of-space-in-interstellar.jpg" alt="Movie 3" />
                                <h1 className="title">Interstellar</h1>
                                <button className="watch">Wacth</button>
                            </div>
                            <div>
                                <img id="slide-4" src="https://images.bauerhosting.com/legacy/empire-tmdb/films/18785/images/39LohvXfll5dGCQIV9B9VJ16ImE.jpg?ar=16%3A9&fit=crop&crop=top&auto=format&w=1440&q=80" alt="Movie 4" />
                                <h1 className="title">The Hangover</h1>
                                <button className="watch">Wacth</button>
                            </div>
                            <div>
                                <img id="slide-5" src="https://www.denofgeek.com/wp-content/uploads/2021/02/Valak-as-the-Nun-in-The-Conjuring-Movies.png?fit=1200%2C708" alt="Movie 5" />
                                <h1 className="title">The Conjuring</h1>
                                <button className="watch">Wacth</button>
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
                </section>
            </main>
        </div>
    );
}

export default Home;
