import React from 'react';
import { useParams } from 'react-router-dom';
import Breadcrumb from '../components/ui/Breadcrumb';
import Modal from '../components/ui/Modal';

export default function JobDetail() {
  const { id } = useParams();
  // Placeholder données
  const job = { id, title:'Coordinateur Eau & Assainissement', description:'Vous superviserez la mise en oeuvre de projets WASH dans plusieurs communes.', requirements:['BAC+4 Génie Civil / Hydraulique','3 ans expérience terrain','Capacité de reporting','Leadership & coordination'], location:'Parakou', type:'CDI', published:'2025-11-01'};

  const [openApply, setOpenApply] = React.useState(false);

  return (
    <div className="container mx-auto px-4 py-12">
      <Breadcrumb items={[{label:'Accueil', to:'/'},{label:'Recrutement', to:'/jobs'},{label:job.title}]} />
      <h1 className="text-3xl font-bold mb-2">{job.title}</h1>
      <div className="text-sm text-gray-500 mb-6">{job.location} • {job.type} • Publié le {job.published}</div>
      <p className="text-gray-600 leading-relaxed max-w-3xl mb-8">{job.description}</p>

      <h2 className="text-xl font-semibold mb-3">Profil recherché</h2>
      <ul className="list-disc ml-6 space-y-2 mb-8 text-gray-600">
        {job.requirements.map((r,i)=>(<li key={i}>{r}</li>))}
      </ul>

      <button onClick={()=>setOpenApply(true)} className="px-6 py-3 rounded bg-primary-600 text-white font-medium hover:bg-primary-700 transition">Postuler</button>

      <Modal open={openApply} onClose={()=>setOpenApply(false)} title="Postuler à l'offre">
        <form className="space-y-4">
          <div>
            <label className="block text-sm font-medium mb-1">Nom complet</label>
            <input type="text" className="w-full border rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500" />
          </div>
          <div>
            <label className="block text-sm font-medium mb-1">Email</label>
            <input type="email" className="w-full border rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500" />
          </div>
          <div>
            <label className="block text-sm font-medium mb-1">Message</label>
            <textarea rows={4} className="w-full border rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500" />
          </div>
          <div className="flex justify-end gap-3 pt-2">
            <button type="button" onClick={()=>setOpenApply(false)} className="px-4 py-2 text-sm rounded border bg-white hover:bg-gray-50">Annuler</button>
            <button type="submit" className="px-5 py-2 text-sm rounded bg-primary-600 text-white">Envoyer</button>
          </div>
        </form>
      </Modal>
    </div>
  );
}
