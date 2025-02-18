import { useState, useEffect } from "react";
import NavBar from "../composent/NavBar";
import "./Home.css";

function Home() {
    const [name, setName] = useState("");

    useEffect(() => {
        document.title = "Home";
        const storedName = localStorage.getItem("username");
        if (storedName) {
            setName(storedName);
        }
    }, []);

    return (
        <>
            <div className="container">
                <NavBar />
                <h1 className="hello">Hello, {name}</h1>
                </div>
        </>
    );
}

export default Home;