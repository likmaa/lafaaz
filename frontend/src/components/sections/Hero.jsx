import React from 'react';
import Carousel from '../ui/Carousel';
import '../../styles/vibes.css';

const heroImages = [
  { src: '/assets/img/accueil1.png', alt: 'Lafaaz Fondation - Aide humanitaire' },
  { src: '/assets/img/about1.png', alt: 'À propos de Lafaaz' },
  { src: '/assets/img/projet2.jpeg', alt: 'Nos projets' }
];

export default function Hero() {
  return (
    <section className="hero-root">
      {/* Background carousel */}
      <div className="hero-bg">
        <Carousel images={heroImages} className="h-full" autoPlay interval={5000} />
      </div>
      {/* Overlay & halos */}
      <div className="hero-overlay" />
      <div className="halo halo-green" />
      <div className="halo halo-blue" />
      <div className="hero-content px-6 md:px-10">
        <h1 className="font-heading text-4xl md:text-6xl font-extrabold mb-6 leading-tight">
          Accélérer l'Accès<br className="hidden md:block" /> Aux Ressources Essentielles
        </h1>
        <p className="text-lg md:text-xl mb-8 text-white/90 max-w-xl leading-relaxed">
          Une fondation engagée pour l'eau potable, la santé, l'éducation et l'autonomie communautaire.
        </p>
        <div className="flex flex-wrap gap-4">
          <a href="/donate" className="btn-donate">Faire un don</a>
          <a href="/projects" className="btn-outline">Voir nos projets</a>
        </div>
      </div>
    </section>
  );
}
