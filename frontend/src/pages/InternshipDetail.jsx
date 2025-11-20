import React from 'react';
import { useParams } from 'react-router-dom';
import Breadcrumb from '../components/ui/Breadcrumb';
import Modal from '../components/ui/Modal';

export default function InternshipDetail() {
  const { id } = useParams();
  const internship = { id, title:'Stage Communication digitale', city:'Cotonou', period:'Jan - Mar', missions:['Création contenu réseaux','Suivi analytics campagnes','Veille partenariats'], description:'Stage immersif au sein de l\'équipe communication.' };
  const [open, setOpen] = React.useState(false);
  return (
    <div className="container mx-auto px-4 py-12">
      <Breadcrumb items={[{label:'Accueil', to:'/'},{label:'Stages', to:'/internships'},{label:internship.title}]} />
      <h1 className="text-3xl font-bold mb-2">{internship.title}</h1>
      <div className="text-sm text-gray-500 mb-6">{internship.city} • Période: {internship.period}</div>
      <p className="text-gray-600 leading-relaxed max-w-2xl mb-8">{internship.description}</p>
      <h2 className="text-xl font-semibold mb-3">Missions</h2>
      <ul className="list-disc ml-6 space-y-2 mb-8 text-gray-600">
        {internship.missions.map((m,i)=>(<li key={i}>{m}</li>))}
      </ul>
      <button onClick={()=>setOpen(true)} className="px-6 py-3 rounded bg-primary-600 text-white font-medium hover:bg-primary-700">Postuler</button>
      <Modal open={open} onClose={()=>setOpen(false)} title="Postuler au stage">
        <form className="space-y-4">
          <div>
            <label className="block text-sm font-medium mb-1">Nom</label>
            <input className="w-full border rounded px-3 py-2 text-sm" />
          </div>
          <div>
            <label className="block text-sm font-medium mb-1">Email</label>
            <input type="email" className="w-full border rounded px-3 py-2 text-sm" />
          </div>
          <div>
            <label className="block text-sm font-medium mb-1">Message</label>
            <textarea rows={4} className="w-full border rounded px-3 py-2 text-sm" />
          </div>
          <div className="flex justify-end gap-3 pt-2">
            <button type="button" onClick={()=>setOpen(false)} className="px-4 py-2 text-sm rounded border bg-white">Annuler</button>
            <button type="submit" className="px-5 py-2 text-sm rounded bg-primary-600 text-white">Envoyer</button>
          </div>
        </form>
      </Modal>
    </div>
  );
}
