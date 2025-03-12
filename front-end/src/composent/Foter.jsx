import "./Foter.css";

function Footer() {
    return (
        <footer className="footer">
            <div className="footer-container">
                <div className="footer-section">
                    <h2>Movies Star</h2>
                    <p>Your favorite streaming platform to discover and watch movies and series.
                        Enjoy a vast collection of films and shows anytime, anywhere.
                        Experience entertainment like never before with seamless streaming.</p>
                </div>
                <div className="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="/Home">Home</a></li>
                        <li><a href="/Movies">Movies</a></li>
                        <li><a href="/Series">Series</a></li>
                        <li><a href="/Watch">Watch History</a></li>
                        <li><a href="/Favorites">Favorites</a></li>
                        <li><a href="/about">About</a></li>
                    </ul>
                </div>
                <div className="footer-section">
                    <h3>Follow us</h3>
                    <div className="social-icons">
                        <a href="https://www.facebook.com" target="_blank" ><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="https://www.twitter.com" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="https://www.instagram.com" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="https://www.youtube.com" target="_blank"><ion-icon name="logo-youtube"></ion-icon></a>
                    </div>
                </div>
            </div>
            <div className="footer-bottom">
                <p>&copy; 2025 Movies Star. All rights reserved.</p>
            </div>
        </footer>
    );
}

export default Footer;
