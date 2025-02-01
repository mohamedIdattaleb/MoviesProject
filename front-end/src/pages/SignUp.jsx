import React, { useState } from 'react';
import { Link, useNavigate } from 'react-router-dom';
import './SignUp.css';

function SignUp() {
    const [formData, setFormData] = useState({
        user_name: '',
        email: '',
        password: '',
        confirmPassword: '',
    });
    const [error, setError] = useState(''); // Error state for form submission
    const navigate = useNavigate();
    const [isLoading, setIsLoading] = useState(false);

    const handleChange = (e) => {
        const { name, value } = e.target;
        setFormData({ ...formData, [name]: value });
    };

    const handleSubmit = async (e) => {
        e.preventDefault();
        if (formData.password !== formData.confirmPassword) {
            setError('Passwords do not match');
            return;
        }

        setIsLoading(true);
        try {
            const response = await fetch('http://localhost:8000/api/v1/register', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    user_name: formData.user_name,
                    email: formData.email,
                    password: formData.password,
                    password_confirmation: formData.confirmPassword,
                }),
            });

            const data = await response.json();
            console.log('Response:', response);
            console.log('Data:', data);

            if (response.ok) {
                navigate('/');
            } else {
                setError(data.errors ? Object.values(data.errors).join(', ') : data.message);
            }
        } catch (err) {
            console.error('Error:', err);
            setError('An error occurred. Please try again.');
        } finally {
            setIsLoading(false);
        }
    };

    return (
        <div className="signup-container">
            <div className="signup">
                <div className='signup-header'>
                    <h1>Movies Star</h1>
                    <h3>Create an account</h3>
                </div>
                <form onSubmit={handleSubmit}>
                    <label htmlFor="user_name">Username</label>
                    <input
                        id="user_name"
                        name="user_name"
                        className='sign-input'
                        type="text"
                        placeholder="Username"
                        value={formData.user_name}
                        onChange={handleChange}
                        required
                    />

                    <label htmlFor="email">Email</label>
                    <input
                        className='sign-input'
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Email"
                        value={formData.email}
                        onChange={handleChange}
                        required
                    />

                    <label htmlFor="password">Password</label>
                    <input
                        className='sign-input'
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Password"
                        value={formData.password}
                        onChange={handleChange}
                        minLength={8}
                        required
                    />

                    <label htmlFor="confirmPassword">Confirm Password</label>
                    <input
                        className='sign-input'
                        id="confirmPassword"
                        name="confirmPassword"
                        type="password"
                        placeholder="Confirm Password"
                        value={formData.confirmPassword}
                        onChange={handleChange}
                        minLength={8}
                        required
                    />

                    {error && <p className="error-message">{error}</p>}

                    <button className='submit' type="submit" disabled={isLoading}>
                        {isLoading ? 'Signing Up...' : 'Sign Up'}
                    </button>

                </form>

                <span>
                    Already have an account?{' '}
                    <Link to="/" className="login-link">Login</Link>
                </span>
            </div>
        </div>
    );
}

export default SignUp;