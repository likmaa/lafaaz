import React from 'react';
import Breadcrumb from '../components/ui/Breadcrumb';

export default function About() {
  return (
    <div className="container mx-auto px-4 py-12">
      <Breadcrumb items={[{label:'Accueil', to:'/'},{label:'À propos'}]} />
      <h1 className="text-3xl md:text-4xl font-bold mb-6">À propos de Lafaaz</h1>
      <p className="text-gray-600 leading-relaxed max-w-3xl mb-8">Notre fondation oeuvre pour un impact social durable à travers des projets centrés sur l'éducation, la santé, l'accès à l'eau potable et l'autonomisation communautaire. Nous croyons en la transparence, l'inclusion et la collaboration.</p>
      <div className="grid md:grid-cols-3 gap-6 mb-12">
        {[
          {title:'Vision', text:'Construire des communautés résilientes où chaque enfant a accès aux ressources essentielles pour s\'épanouir.'},
          {title:'Mission', text:'Financer et exécuter des projets à fort impact mesurable, en mobilisant partenaires et donateurs.'},
          {title:'Valeurs', text:'Intégrité, transparence, innovation, inclusion, durabilité.'},
        ].map((b,i)=>(
          <div key={i} className="bg-white rounded-lg shadow-sm border p-6">
            <h3 className="font-semibold text-lg mb-2">{b.title}</h3>
            <p className="text-sm text-gray-600">{b.text}</p>
          </div>
        ))}
      </div>
      <h2 className="text-2xl font-bold mb-4">Notre équipe</h2>
      <p className="text-gray-600 mb-6 max-w-2xl">Une équipe pluridisciplinaire engagée (bénévoles, coordinateurs terrain, experts métiers). Module équipe détaillé à venir.</p>
      <div className="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        {[1,2,3,4].map(id => (
          <div key={id} className="bg-gray-50 border rounded-lg p-4">
            <div className="h-28 bg-gray-200 rounded mb-3" />
            <div className="h-4 w-24 bg-gray-300 rounded mb-2" />
            <div className="h-3 w-32 bg-gray-200 rounded" />
          </div>
        ))}
      </div>
    </div>
  );
}
