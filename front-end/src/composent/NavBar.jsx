import { Link } from "react-router-dom";
import "./NavBar.css";

function NavBar() {
    return (
        <div className="nav-container">
            <h1 className="head">Movies Star</h1>
            <div className="links">
                <Link className="active" to="/Home">Home</Link>
                <Link to="/Movies">Movies</Link>
                <Link to="/Siries">Series</Link>
                <Link to="/Watch">Watch History</Link>
                <Link to="/Favorites">Favorites</Link>
                <Link to="/about">About</Link>
            </div>
            <div className="end">
                <div class="search">

                    <input class="nav-input" type="text" placeholder="Search..." />
                    <ion-icon class="icon" name="search-outline"></ion-icon>
                </div>


                <button className="log-out">Log Out <ion-icon className="icon-log" name="log-out-outline"></ion-icon></button>
            </div>
        </div>
    );
}

export default NavBar;
