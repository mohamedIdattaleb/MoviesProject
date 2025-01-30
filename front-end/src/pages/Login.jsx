import React, { useState } from 'react';
import { Link, useNavigate } from 'react-router-dom';
import './Login.css';

function Login() {
    const [credentials, setCredentials] = useState({ email: '', password: '' });
    const [error, setError] = useState('');
    const [loading, setLoading] = useState(false); // Loading state for button
    const navigate = useNavigate();

    const handleChange = (e) => {
        const { name, value } = e.target;
        setCredentials({ ...credentials, [name]: value });
    };

    const handleSubmit = async (e) => {
        e.preventDefault();
        setLoading(true); // Show loading state
        setError(''); // Reset error state before the new attempt
        try {
            const response = await fetch('http://localhost:8000/api/login', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(credentials),
            });
            const data = await response.json();

            if (response.ok) {
                // Stocker le token dans le localStorage
                localStorage.setItem('token', data.token);
                navigate('/dashboard'); // Rediriger vers le tableau de bord
            } else {
                console.log(data);
                setError(data.message || 'Identifiants invalides');
            }
        } catch (err) {
            console.error(err);
            setError('Une erreur s\'est produite. Veuillez réessayer.');
        } finally {
            setLoading(false); // Hide loading state once the request is complete
        }
    };

    return (
        <div className='login-container'>
            <div className='login'>
                <div className='login-header'>
                    <h1>Movies Star</h1>
                    <h3>Login to your account</h3>
                </div>
                <form onSubmit={handleSubmit}>
                    <label htmlFor="email">Email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Email"
                        value={credentials.email}
                        onChange={handleChange}
                        required
                    />

                    <label htmlFor="password">Password</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Password"
                        value={credentials.password}
                        onChange={handleChange}
                        required
                    />

                    {error && <p className="error-message">{error}</p>}

                    <button type="submit" disabled={loading}>
                        {loading ? 'Loading...' : 'Login'}
                    </button>
                </form>
                <span>
                    Don’t have an account?{' '}
                    <Link to="/signup" className="signup-link">Sign Up</Link>
                </span>
            </div>
        </div>
    );
}

export default Login;
