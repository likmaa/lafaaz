import React from 'react';
import { useParams } from 'react-router-dom';
import Breadcrumb from '../components/ui/Breadcrumb';
import Modal from '../components/ui/Modal';

// Page dédiée au don ciblé pour un projet spécifique (différente de Donate.jsx général)
export default function DonateProject() {
  const { id } = useParams();
  // Placeholder projet simplifié
  const project = { id, title:'Forage d\'eau potable à Tchaourou', goal:15000, raised:4200, description:'Ce projet vise à installer un forage avec pompe manuelle pour desservir ~800 habitants.' };
  const progress = Math.round((project.raised / project.goal) * 100);
  const [open, setOpen] = React.useState(false);

  return (
    <div className="container mx-auto px-4 py-12">
      <Breadcrumb items={[{label:'Accueil', to:'/'},{label:'Projets', to:'/projects'},{label:'Don'}]} />
      <h1 className="text-3xl font-bold mb-2">Soutenir : {project.title}</h1>
      <p className="text-gray-600 max-w-3xl mb-8">{project.description}</p>

      <div className="mb-8">
        <div className="flex justify-between text-sm font-medium mb-1">
          <span>{project.raised.toLocaleString()} € collectés</span>
          <span>Objectif : {project.goal.toLocaleString()} €</span>
        </div>
        <div className="h-3 rounded bg-gray-200 overflow-hidden">
          <div className="h-full bg-primary-600" style={{width:`${progress}%`}} />
        </div>
        <div className="text-xs text-gray-500 mt-1">Progression : {progress}%</div>
      </div>

      <button onClick={()=>setOpen(true)} className="px-6 py-3 rounded bg-primary-600 text-white font-medium hover:bg-primary-700">Faire un don maintenant</button>

      <Modal open={open} onClose={()=>setOpen(false)} title="Effectuer un don">
        <form className="space-y-4">
          <div>
            <label className="block text-sm font-medium mb-1">Montant (EUR)</label>
            <input type="number" min={1} className="w-full border rounded px-3 py-2 text-sm" defaultValue={25} />
          </div>
          <div>
            <label className="block text-sm font-medium mb-1">Nom</label>
            <input className="w-full border rounded px-3 py-2 text-sm" />
          </div>
          <div>
            <label className="block text-sm font-medium mb-1">Email</label>
            <input type="email" className="w-full border rounded px-3 py-2 text-sm" />
          </div>
          <div className="flex justify-end gap-3 pt-2">
            <button type="button" onClick={()=>setOpen(false)} className="px-4 py-2 text-sm rounded border bg-white">Annuler</button>
            <button type="submit" className="px-5 py-2 text-sm rounded bg-primary-600 text-white">Continuer</button>
          </div>
        </form>
        <p className="text-xs text-gray-500 mt-4">Intégration Kkiapay / PayPal à venir.</p>
      </Modal>
    </div>
  );
}
