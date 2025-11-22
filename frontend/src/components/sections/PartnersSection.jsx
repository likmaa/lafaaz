import React from 'react';
import SectionHeader from '../ui/SectionHeader';

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
    <section className="py-16">
      <div className="container mx-auto px-4">
        <SectionHeader
          title="Nos partenaires"
          align="center"
          subtitle="Un réseau engagé pour amplifier l'impact et assurer la pérennité des projets"
        />
        <div className="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
          {partners.map(p => (
            <div key={p.id} className="group border rounded-lg p-4 flex flex-col items-center justify-center hover:shadow-lg transition relative overflow-hidden bg-transparent">
              <div className="absolute inset-0 opacity-0 group-hover:opacity-5 bg-gradient-to-br from-primary-500 to-secondary-500 transition" />
              <div className="w-14 h-14 bg-gray-100 rounded flex items-center justify-center mb-3 shadow-sm group-hover:shadow-md transition">
                <span className="text-xs text-gray-400 group-hover:text-primary-600">Logo</span>
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
