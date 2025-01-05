import React from 'react';
import { Link } from 'react-router-dom';
function Login() {
    return (
        <>
            <div>
                <h1>Movies App</h1>
                <h6>Login to your account</h6>
                <form>
                    <input type="text" placeholder="Username" />
                    <input type="password" placeholder="Password" />
                    <Link to="/">Forgot Password</Link>
                    <button>Login</button>
            </form>
            <span>Don't have an account?<Link to="/">Sign Up</Link></span>
            </div>
        </>
    )
};
export default Login;