import React, { useEffect, useState } from 'react';
import CausesSection from '../components/sections/CausesSection';
import ImpactSection from '../components/sections/ImpactSection';
import CTASection from '../components/sections/CTASection';
import BackgroundVideo from '../components/layout/BackgroundVideo';

function Typewriter({
  phrases = [],
  typingSpeed = 80,
  deletingSpeed = 50,
  pauseAtEnd = 1200,
}) {
  const [text, setText] = useState('');
  const [isDeleting, setIsDeleting] = useState(false);
  const [index, setIndex] = useState(0);

  useEffect(() => {
    if (!phrases.length) return;
    const current = phrases[index % phrases.length];

    let timeout;
    if (!isDeleting) {
      if (text.length < current.length) {
        timeout = setTimeout(() => {
          setText(current.slice(0, text.length + 1));
        }, typingSpeed);
      } else {
        timeout = setTimeout(() => setIsDeleting(true), pauseAtEnd);
      }
    } else {
      if (text.length > 0) {
        timeout = setTimeout(() => {
          setText(current.slice(0, text.length - 1));
        }, deletingSpeed);
      } else {
        setIsDeleting(false);
        setIndex((i) => (i + 1) % phrases.length);
      }
    }

    return () => clearTimeout(timeout);
  }, [text, isDeleting, index, phrases, typingSpeed, deletingSpeed, pauseAtEnd]);

  return (
    <span>
      {text}
      <span className="ml-1 align-middle inline-block w-[2px] h-[1em] bg-white animate-pulse" />
    </span>
  );
}

// Page d'accueil
export default function Home() {
  return (
    <>
      {/* Hero Section avec vidéo, gradient, titre et description */}
      <div className="relative w-full" style={{ minHeight: '100vh' }}>
        {/* Vidéo en arrière-plan */}
        <BackgroundVideo
          webmSrc="/assets/video/kk1_hq.webm"
          mp4Src="/assets/video/kk1_hq.mp4"
          poster={null}
        />
        
        {/* Gradient bleu dans le Hero uniquement - se termine au même bleu que CausesSection */}
        <div className="absolute inset-0 w-full bg-gradient-to-t from-[#0284c7] via-[#0284c7] via-40% to-transparent to-70% pointer-events-none z-0" />

        {/* Hero content */}
        <div className="relative z-10 min-h-[70vh] md:min-h-[80vh] flex items-start">
          {/* Descend le titre avant le milieu et aligne à droite */}
          <div className="container mx-auto px-12 md:px-20 w-full pt-[26vh] md:pt-[30vh] ml-auto">
            <h1 className="text-white text-left font-extrabold tracking-tight leading-tight text-5xl sm:text-6xl md:text-8xl">
              <Typewriter
                phrases={["Make a difference", "Faisons la différence"]}
                typingSpeed={80}
                deletingSpeed={50}
                pauseAtEnd={1200}
              />
            </h1>
          </div>

          {/* Descriptif court en bas à droite */}
          <div className="absolute bottom-2 right-12 md:right-20 max-w-lg text-white/90 text-sm md:text-base leading-relaxed text-left space-y-3">
            <p>
              À La FAAZ, nous propulsons les initiatives solidaires avec 
              un accompagnement humain et efficace.
              Nous ne nous contentons pas de financer la solidarité : nous la structurons. 
            </p>
            <p>
              La FAAZ offre aux porteurs de projets l'expertise nécessaire 
              pour réussir et aux donateurs la garantie d'un impact réel, 
              le tout dans une approche de proximité absolue.
            </p>
            <p>
              Priorités: enfance indigente, excellence scolaire, dignité des aînés.
              Des actions concrètes et mesurables, ici et maintenant.
            </p>
          </div>
        </div>
      </div>

      {/* Section Nos Causes */}
      <CausesSection />

      {/* Section Impact (placeholder, ready for vibes) */}
      <ImpactSection />

      {/* Section CTA */}
      <CTASection />
    </>
  );
}
