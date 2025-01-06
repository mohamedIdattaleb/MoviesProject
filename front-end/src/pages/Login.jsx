import React from 'react';
import { Link } from 'react-router-dom';
import './Login.css';


function Login() {
    return (
        <div className='login-container'>
            <div className='login'>
                <h1>Movies Star</h1>
                <h3>Login to your account</h3>
                <form>
                    <label htmlFor="username">Username</label><br />
                    <input 
                        id="username" 
                        type="text" 
                        placeholder="Username" 
                        required 
                    />

                    <label htmlFor="password">Password</label><br />
                    <input 
                        id="password" 
                        type="password" 
                        placeholder="Password" 
                        required 
                    />

                    <Link to="/forgot-password" className="forgot-password-link">
                        Forgot Password?
                    </Link><br />

                    <button type="submit">Login</button>
                </form>
                <span>
                    Don't have an account? 
                    <Link to="/signup" className="signup-link"> Sign Up</Link>
                </span>
            </div>
        </div>
    );
}

export default Login;
