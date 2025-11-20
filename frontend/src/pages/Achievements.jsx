import React from 'react';
import Breadcrumb from '../components/ui/Breadcrumb';

const mockAchievements = [
  { id:1, title:'30 Forages réalisés', description:'Accès à l\'eau potable pour 12 000 personnes', year:2024 },
  { id:2, title:'120 Bourses scolaires', description:'Soutien éducatif pour élèves défavorisés', year:2025 },
  { id:3, title:'15 Centres de santé équipés', description:'Matériel médical de première nécessité', year:2025 }
];

export default function Achievements() {
  return (
    <div className="container mx-auto px-4 py-12">
      <Breadcrumb items={[{label:'Accueil', to:'/'},{label:'Réalisations'}]} />
      <h1 className="text-3xl md:text-4xl font-bold mb-6">Nos réalisations</h1>
      <p className="text-gray-600 max-w-3xl mb-10">Quelques indicateurs d'impact de nos actions. Les données seront dynamiques via l'API Realisation.</p>
      <div className="grid md:grid-cols-3 gap-6">
        {mockAchievements.map(a => (
          <div key={a.id} className="bg-white border rounded-lg p-6 shadow-sm">
            <div className="text-primary-600 text-sm font-medium mb-2">{a.year}</div>
            <h3 className="font-semibold text-lg mb-2">{a.title}</h3>
            <p className="text-sm text-gray-600">{a.description}</p>
          </div>
        ))}
      </div>
    </div>
  );
}
