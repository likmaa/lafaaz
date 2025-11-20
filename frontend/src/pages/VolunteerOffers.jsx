import React from 'react';
import Breadcrumb from '../components/ui/Breadcrumb';
import { Link } from 'react-router-dom';

const mockVolunteers = [
  {id:1, title:'Animation atelier hygiène scolaire', city:'Djougou', duration:'2 semaines'},
  {id:2, title:'Campagne sensibilisation paludisme', city:'Natitingou', duration:'1 mois'},
  {id:3, title:'Appui formation maraîchage', city:'Kandi', duration:'3 semaines'}
];

export default function VolunteerOffers() {
  return (
    <div className="container mx-auto px-4 py-12">
      <Breadcrumb items={[{label:'Accueil', to:'/'},{label:'Recrutement', to:'/jobs'},{label:'Bénévolat'}]} />
      <h1 className="text-3xl md:text-4xl font-bold mb-2">Opportunités de bénévolat</h1>
      <p className="text-gray-600 mb-8 max-w-2xl">Impliquez-vous directement sur le terrain. Les offres seront chargées via l'API Bénévolat (Gbenevole) ultérieurement.</p>
      <div className="grid md:grid-cols-2 gap-6">
        {mockVolunteers.map(v => (
          <Link key={v.id} to={`/volunteering/${v.id}`} className="border rounded-lg p-5 bg-white hover:shadow-sm transition">
            <h3 className="font-semibold text-lg mb-1">{v.title}</h3>
            <div className="text-sm text-gray-500 mb-1">{v.city}</div>
            <div className="text-xs font-medium text-primary-700 bg-primary-100 inline-block px-2 py-1 rounded">Durée: {v.duration}</div>
          </Link>
        ))}
      </div>
    </div>
  );
}
