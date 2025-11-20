import React from 'react';
import Breadcrumb from '../components/ui/Breadcrumb';
import Accordion from '../components/ui/Accordion';

const faqItems = [
  {question:'Comment vos projets sont-ils sélectionnés ?', answer:'Nous évaluons l\'impact potentiel, la faisabilité locale, le coût par bénéficiaire et la durabilité.'},
  {question:'Puis-je faire un don récurrent ?', answer:'Oui. Le module de gestion des dons récurrents sera disponible prochainement.'},
  {question:'Recevrai-je un reçu fiscal ?', answer:'Un reçu électronique est envoyé après chaque transaction validée.'},
  {question:'Comment suivre l\'avancement d\'un projet ?', answer:'Une page de suivi avec jalons, photos et budget sera disponible sur chaque projet.'}
];

export default function FAQ() {
  return (
    <div className="container mx-auto px-4 py-12">
      <Breadcrumb items={[{label:'Accueil', to:'/'},{label:'FAQ'}]} />
      <h1 className="text-3xl md:text-4xl font-bold mb-6">Foire aux questions</h1>
      <p className="text-gray-600 max-w-2xl mb-8">Réponses aux questions les plus fréquentes. Cette section deviendra dynamique via le modèle Gfaq.</p>
      <Accordion items={faqItems} />
    </div>
  );
}
