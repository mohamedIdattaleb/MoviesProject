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
        }, 5000);

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
            <h1 className="hello">
                Hello {name}
            </h1>
            <div className="slider">
                <div className="sliders" ref={sliderRef}>
                    <img id="slide-1" src="https://miro.medium.com/v2/resize:fit:1400/1*-xxH5kXE8AGA8-vzPURslg.jpeg" alt="Movie 1" />
                    <img id="slide-2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8EF7x1a5shr8GUyacumF4UfzvFeRfwDKhsQ&s" alt="Movie 2" />
                    <img id="slide-3" src="https://loudandclearreviews.com/wp-content/uploads/2024/04/interstellar-meaning-1024x512.webp" alt="Movie 3" />
                    <img id="slide-4" src="https://images.bauerhosting.com/legacy/empire-tmdb/films/18785/images/39LohvXfll5dGCQIV9B9VJ16ImE.jpg?ar=16%3A9&fit=crop&crop=top&auto=format&w=1440&q=80" alt="Movie 4" />
                    <img id="slide-5" src="https://i0.wp.com/highschool.latimes.com/wp-content/uploads/2018/01/the-conjuring-hd-wallpaper.jpg?fit=2548%2C1566&ssl=1" alt="Movie 5" />
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
        </div>
    );
}

export default Home;
