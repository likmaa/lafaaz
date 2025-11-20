import React from 'react';
import { Link } from 'react-router-dom';
import Breadcrumb from '../components/ui/Breadcrumb';
import Pagination from '../components/ui/Pagination';

// Placeholder en attendant l'API Recrutement (Grecrutement / Grejoindre models)
const mockJobs = [
  {id:1, title:'Coordinateur Eau & Assainissement', location:'Parakou', type:'CDI', published:'2025-11-01'},
  {id:2, title:'Chargé Suivi & Évaluation', location:'Cotonou', type:'CDD', published:'2025-10-15'},
  {id:3, title:'Responsable Partenariats', location:'Abomey', type:'Stage', published:'2025-09-28'},
];

export default function JobOffers() {
  return (
    <div className="container mx-auto px-4 py-12">
      <Breadcrumb items={[{label:'Accueil', to:'/'},{label:'Recrutement'},{label:'Offres d\'emploi'}]} />
      <h1 className="text-3xl md:text-4xl font-bold mb-2">Offres d'emploi</h1>
      <p className="text-gray-600 mb-8 max-w-2xl">Rejoignez une équipe engagée. Les offres ci-dessous sont des exemples statiques en attendant le backend.</p>
      <div className="space-y-4">
        {mockJobs.map(job => (
          <Link key={job.id} to={`/jobs/${job.id}`} className="block border rounded-lg p-5 hover:shadow-sm transition bg-white">
            <div className="flex justify-between items-start mb-1">
              <h3 className="font-semibold text-lg text-gray-800">{job.title}</h3>
              <span className="text-xs px-2 py-1 rounded bg-primary-100 text-primary-700">{job.type}</span>
            </div>
            <div className="text-sm text-gray-500 mb-2">{job.location} • Publié le {job.published}</div>
            <span className="text-sm text-primary-600 font-medium">Voir détail →</span>
          </Link>
        ))}
      </div>
      <Pagination page={1} totalPages={1} />
    </div>
  );
}
