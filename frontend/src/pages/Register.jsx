import React, { useState } from 'react';
import Button from '../components/ui/Button';
import api from '../services/api';
import useAuth from '../hooks/useAuth';

export default function Register() {
  const { setToken } = useAuth();
  const [form, setForm] = useState({ name: '', email: '', password: '', password_confirmation: '' });
  const [error, setError] = useState(null);

  function update(k, v) { setForm(f => ({ ...f, [k]: v })); }

  async function handleSubmit(e) {
    e.preventDefault();
    setError(null);
    try {
      const res = await api.post('/register', form);
      setToken(res.data.access_token);
    } catch (err) {
      const messages = err.response?.data?.errors ? Object.values(err.response.data.errors).flat().join('\n') : 'Erreur inscription';
      setError(messages);
    }
  }

  return (
    <div className="max-w-sm mx-auto">
      <h1 className="text-2xl font-bold mb-4">Inscription</h1>
      <form className="space-y-4" onSubmit={handleSubmit}>
        {error && <div className="text-sm whitespace-pre-line text-red-600">{error}</div>}
        <div>
          <label className="block text-sm font-medium mb-1">Nom</label>
          <input value={form.name} onChange={e=>update('name', e.target.value)} type="text" className="w-full border rounded px-3 py-2" />
        </div>
        <div>
          <label className="block text-sm font-medium mb-1">Email</label>
          <input value={form.email} onChange={e=>update('email', e.target.value)} type="email" className="w-full border rounded px-3 py-2" />
        </div>
        <div>
          <label className="block text-sm font-medium mb-1">Mot de passe</label>
          <input value={form.password} onChange={e=>update('password', e.target.value)} type="password" className="w-full border rounded px-3 py-2" />
        </div>
        <div>
          <label className="block text-sm font-medium mb-1">Confirmer</label>
          <input value={form.password_confirmation} onChange={e=>update('password_confirmation', e.target.value)} type="password" className="w-full border rounded px-3 py-2" />
        </div>
        <Button type="submit">Créer le compte</Button>
      </form>
    </div>
  );
}
