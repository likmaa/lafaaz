import React from 'react';
import { Link, NavLink } from 'react-router-dom';

const nav = [
  { to: '/', label: 'Accueil' },
  { to: '/projects', label: 'Projets' },
  { to: '/news', label: 'Actualités' },
  { to: '/donate', label: 'Faire un don' }
];

export default function Header() {
  return (
    <header className="border-b bg-white/80 backdrop-blur sticky top-0 z-50">
      <div className="container mx-auto px-4 py-3 flex items-center gap-6">
        <Link to="/" className="text-xl font-bold text-primary-600">LAFAAZ</Link>
        <nav className="flex gap-4">
          {nav.map(i => (
            <NavLink
              key={i.to}
              to={i.to}
              className={({ isActive }) => `text-sm font-medium px-2 py-1 rounded ${isActive ? 'text-primary-700' : 'text-gray-600 hover:text-primary-600'}`}
            >
              {i.label}
            </NavLink>
          ))}
        </nav>
        <div className="ml-auto flex gap-2">
          <NavLink to="/login" className="text-sm px-3 py-1 rounded border hover:bg-gray-100">Connexion</NavLink>
          <NavLink to="/register" className="text-sm px-3 py-1 rounded bg-primary-600 text-white hover:bg-primary-700">Inscription</NavLink>
        </div>
      </div>
    </header>
  );
}
