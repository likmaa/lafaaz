import React, { useState } from 'react';
import Button from '../components/ui/Button';
import api from '../services/api';
import useAuth from '../hooks/useAuth';

export default function Login() {
  const { setToken } = useAuth();
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [error, setError] = useState(null);

  async function handleSubmit(e) {
    e.preventDefault();
    setError(null);
    try {
      const res = await api.post('/login', { email, password });
      setToken(res.data.access_token);
    } catch (err) {
      setError(err.response?.data?.message || 'Erreur de connexion');
    }
  }

  return (
    <div className="max-w-sm mx-auto">
      <h1 className="text-2xl font-bold mb-4">Connexion</h1>
      <form className="space-y-4" onSubmit={handleSubmit}>
        {error && <p className="text-sm text-red-600">{error}</p>}
        <div>
          <label className="block text-sm font-medium mb-1">Email</label>
          <input value={email} onChange={e=>setEmail(e.target.value)} type="email" className="w-full border rounded px-3 py-2" />
        </div>
        <div>
          <label className="block text-sm font-medium mb-1">Mot de passe</label>
          <input value={password} onChange={e=>setPassword(e.target.value)} type="password" className="w-full border rounded px-3 py-2" />
        </div>
        <Button type="submit">Se connecter</Button>
      </form>
    </div>
  );
}
