import React from 'react';
import { Link } from 'react-router-dom';
import './Login.css';


function Login() {
    return (
        <div className='login-container'>
            <div className='login'>
                <div className='login-header'>
                    <h1>Movies Star</h1>
                    <h3>Login to your account</h3>
                </div>
                <form>
                    <label htmlFor="username">Username</label>
                    <input
                        id="username"
                        type="text"
                        placeholder="Username"
                        required
                    />

                    <label htmlFor="password">Password</label>
                    <input
                        id="password"
                        type="password"
                        placeholder="Password"
                        minLength={8}
                        required
                    />

                    <Link to="/forgot-password" className="forgot-password-link">
                        Forgot Password?
                    </Link>

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
