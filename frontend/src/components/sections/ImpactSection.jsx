import React from 'react';

const impactStats = [
  {
    title: 'Projets financés',
    description: "Un investissement ciblé pour maximiser l'effet levier de chaque euro collecté.",
    subItems: [
      { label: 'Infrastructures éducatives', value: '142' },
      { label: 'Centres de soins bâtis', value: '35' },
      { label: 'Micro-crédits accordés', value: '2.4M€' },
      { label: 'Taux de réalisation', value: '98%' },
    ],
  },
  {
    title: 'Bénéficiaires',
    description: "Des vies transformées durablement grâce à une approche centrée sur l'humain.",
    subItems: [
      { label: 'Enfants scolarisés', value: '12k+' },
      { label: 'Familles accompagnées', value: '850' },
      { label: 'Femmes entrepreneures', value: '60%' },
      { label: "Patients soignés / an", value: '45k' },
    ],
  },
  {
    title: 'Transparence',
    description: "Une rigueur absolue dans la gestion et le reporting de nos ressources.",
    subItems: [
      { label: 'Fonds alloués au terrain', value: '89%' },
      { label: "Rapports d'audit", value: '100%' },
      { label: 'Bailleurs institutionnels', value: '12' },
      { label: "Années d'existence", value: '15' },
    ],
  },
];

export default function ImpactSection() {
  return (
    <section id="impact" className="py-32 bg-[#fafbfc]">
      <div className="container mx-auto px-6 lg:px-12 max-w-[1400px]">
        {/* Header */}
        <div className="flex flex-col lg:flex-row lg:items-end justify-between mb-24 gap-10">
          <div className="lg:w-1/2">
            <span className="inline-block py-1 px-3 rounded-full bg-indigo-50 text-[#16a34a] text-xs font-semibold tracking-wider uppercase mb-6">
              Notre Empreinte
            </span>
            <h2 className="text-4xl md:text-[3.5rem] leading-[1.1] font-bold text-[#16a34a] tracking-tight">
              Mesurer notre <br />
              <span className="text-slate-400">impact réel.</span>
            </h2>
          </div>
          <div className="lg:w-1/3">
            <p className="text-slate-700 text-lg leading-relaxed font-light">
              Au-delà des promesses, nous nous engageons sur des résultats. Chaque chiffre reflète une réalité de terrain et une victoire contre la précarité.
            </p>
          </div>
        </div>

        {/* Grid */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
          {impactStats.map((stat, idx) => (
            <div
              key={idx}
              className="bg-white rounded-[2.5rem] p-10 lg:p-12 shadow-[0_2px_40px_-12px_rgba(0,0,0,0.06)] hover:shadow-[0_20px_60px_-12px_rgba(0,0,0,0.1)] transition-all duration-500 flex flex-col group border border-slate-100/50 hover:border-slate-200/80 hover:-translate-y-1"
            >
              <div className="mb-8">
                <h3 className="text-3xl md:text-2xl font-bold text-slate-800 mb-4 group-hover:text-[#16a34a] transition-colors duration-300">
                  {stat.title}
                </h3>
                <p className="text-slate-500 leading-relaxed text-base font-medium">{stat.description}</p>
              </div>

              <div className="mt-auto space-y-3">
                {stat.subItems.map((item, itemIdx) => (
                  <div key={itemIdx} className="flex items-center justify-between py-3 border-t border-slate-50">
                    <div className="flex flex-col">
                      <span className="text-sm text-slate-400 font-medium mb-0.5">{item.label}</span>
                      <span className="text-lg md:text-xl font-bold text-slate-700">{item.value}</span>
                    </div>

                    <div className="w-12 h-12 rounded-full border border-slate-100 flex items-center justify-center bg-slate-50 text-slate-300 transition-all duration-300 shadow-sm">
                      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                      </svg>
                    </div>
                  </div>
                ))}
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );

}
