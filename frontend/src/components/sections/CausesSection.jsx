import React from 'react';

const causes = [
  {
    title: "Aide à l'enfance indigente",
    description: "Un système d'intervention humain pour anticiper efficacité et accompagnement de nos actions auprès des enfants défavorisés."
  },
  {
    title: "Promotion de l'excellence scolaire",
    description: "Un environnement éducatif humanisé pour évaluer l'efficacité et valoriser l'excellence de nos programmes éducatifs."
  },
  {
    title: "Assistance personnes âgées",
    description: "L'union d'un système d'accompagnement humain et d'un soutien humanisé dans un seul modèle – pour des données encore plus proches de la personne."
  },
  {
    title: "Soutien aux familles",
    description: "Modèle d'accompagnement familial optimisé par l'expertise de nos équipes scientifiques."
  },
  {
    title: "Accès aux soins de santé",
    description: "Une stratégie de santé publique humanisée pour garantir l'accès aux soins essentiels et renforcer la prévention auprès des plus vulnérables."
  }
];

export default function CausesSection() {
  return (
    <section className="py-20 bg-[#0284c7] min-h-screen flex items-center justify-center">
      <div className="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        
        {/* 
           Parent Grid: Split into two main areas.
           - Left (Hero): Takes 2/5 of the width (approx 40%)
           - Right (Cards Wrapper): Takes 3/5 of the width (approx 60%)
        */}
        <div className="grid grid-cols-1 lg:grid-cols-5 gap-6">
          
          {/* LEFT CARD (Hero) */}
          <div className="lg:col-span-2 bg-gradient-to-br from-[#0c4a6e] to-[#0284c7] rounded-3xl p-8 md:p-10 text-white flex flex-col justify-between relative overflow-hidden shadow-xl min-h-[400px] lg:min-h-auto">
            
            {/* Decorative Wave */}
            <div className="absolute bottom-0 left-0 right-0 opacity-10 pointer-events-none">
               <svg viewBox="0 0 1440 320" className="w-full h-auto" preserveAspectRatio="none">
                  <path fill="#fff" fillOpacity="1" d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
               </svg>
            </div>

            {/* Decorative Icon */}
            <div className="absolute bottom-10 right-10 opacity-5 transform rotate-12 pointer-events-none">
              <svg width="500" height="500" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
              </svg>
            </div>
            
            <div className="relative z-10">
              <h2 className="text-4xl md:text-5xl font-bold mb-8 leading-tight text-white">
                Nos axes d'intervention pour un impact durable
              </h2>
            </div>

            <div className="relative z-15 mt-auto">
              <p className="text-white/100 text-lg leading-relaxed">
                Chaque programme d'action est unique. C'est pourquoi nous vous proposons 
                une gamme complète de solutions adaptées, conçues pour maximiser l'impact 
                de nos interventions auprès des populations vulnérables.
              </p>
            </div>
          </div>

          {/* RIGHT CARDS WRAPPER */}
          {/* 
              Inner Grid Logic:
              We use a 6-column grid on large screens.
              - First 3 cards span 2 columns each (2+2+2 = 6) -> 3 items in row 1.
              - Last 2 cards span 3 columns each (3+3 = 6) -> 2 items in row 2 (filling the full width).
          */}
          <div className="lg:col-span-3 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-6 gap-6">
            {causes.map((cause, idx) => (
              <div 
                key={idx} 
                className={`bg-white rounded-3xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col justify-between group h-full ${idx < 3 ? 'lg:col-span-2' : 'lg:col-span-3'}`}
              >
                <div>
                  <h3 className="text-lg md:text-xl font-bold text-slate-800 mb-3 group-hover:text-[#16a34a] transition-colors">
                    {cause.title}
                  </h3>
                  <p className="text-slate-600 leading-relaxed text-sm mb-6">
                    {cause.description}
                  </p>
                </div>
                
                <button className="bg-[#16a34a] hover:bg-[#15803d] text-white text-sm font-medium px-6 py-3 rounded-full transition-all duration-200 hover:scale-[1.02] active:scale-95 shadow-md w-full text-center">
                  Découvrir
                </button>
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
}