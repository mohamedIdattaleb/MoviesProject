import { Link } from "react-router-dom";
import "./NavBar.css";

function NavBar() {
    return (
        <div className="nav-container">
            <h1>Movies Star</h1>
            <div className="links">
                <Link className="active" to="/">Home</Link>
                <Link to="/discover">Discover</Link>
                <Link to="/movie-release">Movie Release</Link>
                <Link to="/forum">Forum</Link>
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
