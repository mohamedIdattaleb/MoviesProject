import { use, useEffect } from "react";
import NavBar from "../composent/NavBar";
import "./Home.css";
function Home(){
    useEffect(()=>{
        document.title="Home";
        localStorage.getItem
    },[]);
    return <>
    <NavBar/>
    
    </>
}
export default Home;