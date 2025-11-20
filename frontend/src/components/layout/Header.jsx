import React, { useEffect, useState } from 'react';
import { Link, NavLink } from 'react-router-dom';

const nav = [
  { to: '/', label: 'Accueil' },
  { to: '/projects', label: 'Projets' },
  { to: '/news', label: 'Actualités' },
  { to: '/donate', label: 'Faire un don' }
];

export default function Header() {
  const [scrolled, setScrolled] = useState(false);
  useEffect(() => {
    const onScroll = () => setScrolled(window.scrollY > 16);
    window.addEventListener('scroll', onScroll);
    return () => window.removeEventListener('scroll', onScroll);
  }, []);

  return (
    <header className={`header-root ${scrolled ? 'header-scrolled' : 'header-glass'}`}>
      <div className="container mx-auto px-4 py-3 flex items-center gap-6">
        <Link to="/" className="text-xl font-bold font-heading tracking-tight text-primary-600">LAFAAZ</Link>
        <nav className="flex gap-4">
          {nav.map(i => (
            <NavLink
              key={i.to}
              to={i.to}
              className={({ isActive }) => `text-sm font-medium px-2 py-1 rounded-full transition-colors ${isActive ? 'text-primary-600' : 'text-textprimary/70 hover:text-primary-600'}`}
            >
              {i.label}
            </NavLink>
          ))}
        </nav>
        <div className="ml-auto flex items-center gap-3">
          <NavLink to="/login" className="btn-outline">Connexion</NavLink>
          <NavLink to="/donate" className="btn-donate">Donner</NavLink>
        </div>
      </div>
    </header>
  );
}
