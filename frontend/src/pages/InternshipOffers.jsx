import React from 'react';
import Breadcrumb from '../components/ui/Breadcrumb';
import { Link } from 'react-router-dom';

const mockInternships = [
  {id:1, title:'Stage Communication digitale', city:'Cotonou', period:'Jan - Mar'},
  {id:2, title:'Stage Data impact projets', city:'Parakou', period:'Avr - Juin'},
  {id:3, title:'Stage Gestion partenariats', city:'Abomey', period:'Mai - Août'}
];

export default function InternshipOffers() {
  return (
    <div className="container mx-auto px-4 py-12">
      <Breadcrumb items={[{label:'Accueil', to:'/'},{label:'Recrutement', to:'/jobs'},{label:'Stages'}]} />
      <h1 className="text-3xl md:text-4xl font-bold mb-2">Stages</h1>
      <p className="text-gray-600 mb-8 max-w-2xl">Opportunités de stage pour étudiants souhaitant développer des compétences dans l'humanitaire.</p>
      <div className="grid md:grid-cols-2 gap-6">
        {mockInternships.map(s => (
          <Link key={s.id} to={`/internships/${s.id}`} className="border rounded-lg p-5 bg-white hover:shadow-sm transition">
            <h3 className="font-semibold text-lg mb-1">{s.title}</h3>
            <div className="text-sm text-gray-500 mb-1">{s.city}</div>
            <div className="text-xs font-medium text-primary-700 bg-primary-100 inline-block px-2 py-1 rounded">Période: {s.period}</div>
          </Link>
        ))}
      </div>
    </div>
  );
}
