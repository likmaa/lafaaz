import React from 'react';

// Section partenaires (statique avant intégration API / stockage logos)
const partners = [
  { id:1, name:'UNICEF', type:'Institution', logo:null },
  { id:2, name:"Fondation Eau & Vie", type:'ONG', logo:null },
  { id:3, name:'SolarVillage', type:'Entreprise', logo:null },
  { id:4, name:'EduPlus', type:'Association', logo:null },
  { id:5, name:'HealthLink', type:'Programme', logo:null },
  { id:6, name:'AgriDev', type:'Partenaire local', logo:null }
];

export default function PartnersSection() {
  return (
    <section className="py-16 bg-gray-50">
      <div className="container mx-auto px-4">
        <div className="text-center mb-10">
          <h2 className="text-3xl font-bold mb-2">Nos partenaires</h2>
            <div className="w-20 h-1 bg-primary-600 mx-auto"></div>
          <p className="text-gray-600 mt-4 max-w-xl mx-auto text-sm">Nous collaborons avec des organisations engagées pour amplifier l'impact et assurer la pérennité des projets.</p>
        </div>
        <div className="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
          {partners.map(p => (
            <div key={p.id} className="group border rounded-lg p-4 bg-white flex flex-col items-center justify-center hover:shadow-sm transition">
              <div className="w-14 h-14 bg-gray-100 rounded flex items-center justify-center mb-3">
                {/* Placeholder logo zone */}
                <span className="text-xs text-gray-400">Logo</span>
              </div>
              <p className="text-sm font-medium text-gray-700 group-hover:text-primary-700 text-center">{p.name}</p>
              <p className="text-[11px] text-gray-500 mt-1">{p.type}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
