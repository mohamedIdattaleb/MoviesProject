import { Link } from "react-router-dom"


function NavBar() {
    return (
        <>
        <h1>Movies Star</h1>
        <div>
            <Link>Home</Link>
            <Link>Discover</Link>
            <Link>Movie Release</Link>
            <Link>Forum</Link>
            <Link>About</Link>
        </div>
        <button>Log Out</button>
        </>
    )
}


export default NavBar;