import React from 'react';

export default function StatsSection({ stats }) {
  const defaultStats = [
    { label: 'Projets réalisés', value: stats?.projets || '0', icon: '🎯' },
    { label: 'Dons reçus', value: stats?.dons || '0', icon: '💝' },
    { label: 'Bénéficiaires', value: stats?.beneficiaires || '0', icon: '👥' },
    { label: 'Bénévoles', value: stats?.benevoles || '0', icon: '🤝' }
  ];

  return (
    <section className="py-16 bg-primary-600 text-white">
      <div className="container mx-auto px-4">
        <div className="grid grid-cols-2 md:grid-cols-4 gap-8">
          {defaultStats.map((stat, idx) => (
            <div key={idx} className="text-center">
              <div className="text-4xl mb-2">{stat.icon}</div>
              <div className="text-4xl md:text-5xl font-bold mb-2">{stat.value}</div>
              <div className="text-primary-100 font-medium">{stat.label}</div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
