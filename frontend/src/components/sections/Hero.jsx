import React from 'react';
import Carousel from '../ui/Carousel';

const heroImages = [
  { src: '/assets/img/accueil1.png', alt: 'Lafaaz Fondation - Aide humanitaire' },
  { src: '/assets/img/about1.png', alt: 'À propos de Lafaaz' },
  { src: '/assets/img/projet2.jpeg', alt: 'Nos projets' }
];

export default function Hero() {
  return (
    <section className="relative">
      <Carousel images={heroImages} className="h-[500px] md:h-[600px]" autoPlay interval={5000} />
      
      {/* Overlay avec texte */}
      <div className="absolute inset-0 bg-black/40 flex items-center justify-center z-[5]">
        <div className="text-center text-white px-4">
          <h1 className="text-4xl md:text-6xl font-bold mb-4 drop-shadow-lg">
            LAFAAZ Fondation
          </h1>
          <p className="text-xl md:text-2xl mb-6 drop-shadow-md max-w-2xl mx-auto">
            Favoriser l'accès aux besoins quotidiens et à l'égalité des chances
          </p>
          <div className="flex flex-wrap gap-4 justify-center">
            <a href="/donate" className="bg-primary-600 hover:bg-primary-700 text-white px-6 py-3 rounded-md font-medium transition">
              Faire un don
            </a>
            <a href="/projects" className="bg-white hover:bg-gray-100 text-gray-900 px-6 py-3 rounded-md font-medium transition">
              Nos projets
            </a>
          </div>
        </div>
      </div>
    </section>
  );
}
