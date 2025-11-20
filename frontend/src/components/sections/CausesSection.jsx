import React from 'react';
import SectionHeader from '../ui/SectionHeader';

const causes = [
  {
    icon: '/assets/img/accueil3.png',
    title: "Aide à l'enfance indigente",
    description: "Nous fournissons une aide essentielle aux enfants indigents en leur offrant des soins de santé, une éducation, un soutien émotionnel et d'autres ressources nécessaires pour les aider à surmonter les défis liés à leur situation."
  },
  {
    icon: '/assets/img/accueil4.png',
    title: "Promotion de l'excellence en milieu scolaire",
    description: "Nous nous engageons à promouvoir l'excellence chez les enfants en leur fournissant des opportunités d'apprentissage et de développement, des outils et des ressources pour exceller dans leurs études et dans leur vie."
  },
  {
    icon: '/assets/img/accueil5.png',
    title: "Assistance aux personnes du troisième âge",
    description: "Nous offrons une assistance complète aux personnes âgées, notamment des soins de santé, un soutien social, une aide à domicile et d'autres services pour améliorer leur qualité de vie et leur bien-être."
  }
];

export default function CausesSection() {
  return (
    <section className="py-16 bg-gray-50">
      <div className="container mx-auto px-4">
        <SectionHeader
          title="Nos causes"
          align="center"
          subtitle="Des axes d'intervention concrets pour un impact durable"
        />

        {/* Causes grid */}
        <div className="grid md:grid-cols-3 gap-8">
          {causes.map((cause, idx) => (
            <div key={idx} className="bg-white rounded-lg p-6 shadow-sm hover:shadow-lg transition text-center relative overflow-hidden">
              <div className="absolute inset-0 opacity-0 hover:opacity-10 transition bg-gradient-to-br from-primary-500/40 to-secondary-500/40" />
              <div className="mb-4 flex justify-center">
                <img src={cause.icon} alt={cause.title} className="w-20 h-20 object-contain" />
              </div>
              <h3 className="text-xl font-semibold mb-3">{cause.title}</h3>
              <p className="text-gray-600 text-sm leading-relaxed text-justify">
                {cause.description}
              </p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
