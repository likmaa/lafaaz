import React from 'react';
import { Link } from 'react-router-dom';
import { useQuery } from '@tanstack/react-query';
import api from '../services/api';
import Hero from '../components/sections/Hero';
import CausesSection from '../components/sections/CausesSection';
import StatsSection from '../components/sections/StatsSection';
import CTASection from '../components/sections/CTASection';
import TestimonialsSection from '../components/sections/TestimonialsSection';
import PartnersSection from '../components/sections/PartnersSection';
import ProjectCard from '../components/ui/ProjectCard';
import NewsCard from '../components/ui/NewsCard';
import Loading from '../components/ui/Loading';

export default function Home() {
  const projets = useQuery({
    queryKey: ['home-projects'],
    queryFn: async () => (await api.get('/projets?limit=3')).data,
    staleTime: 1000 * 60
  });

  const actus = useQuery({
    queryKey: ['home-actus'],
    queryFn: async () => (await api.get('/actualites?limit=3')).data,
    staleTime: 1000 * 60
  });

  const temoignages = useQuery({
    queryKey: ['home-temoignages'],
    queryFn: async () => (await api.get('/temoignages?limit=3')).data,
    staleTime: 1000 * 60
  });

  const stats = useQuery({
    queryKey: ['stats'],
    queryFn: async () => (await api.get('/stats')).data,
    staleTime: 1000 * 60 * 5
  });

  return (
    <div className="-mt-6">
      {/* Hero Section */}
      <Hero />

      {/* CTA Section */}
      <CTASection />

      {/* Causes Section */}
      <CausesSection />

      {/* Stats Section */}
      <StatsSection stats={stats.data} />

      {/* Derniers Projets */}
      <section className="py-16 bg-white">
        <div className="container mx-auto px-4">
          <div className="flex items-center justify-between mb-8">
            <div>
              <h2 className="text-3xl font-bold mb-2">Derniers projets</h2>
              <div className="w-20 h-1 bg-primary-600"></div>
            </div>
            <Link to="/projects" className="text-primary-600 hover:text-primary-700 font-medium inline-flex items-center gap-1">
              Voir tous les projets
              <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5l7 7-7 7" />
              </svg>
            </Link>
          </div>
          
          {projets.isLoading ? (
            <Loading text="Chargement des projets..." />
          ) : projets.data?.data?.length > 0 ? (
            <div className="grid md:grid-cols-3 gap-6">
              {projets.data.data.map(p => <ProjectCard key={p.id} project={p} />)}
            </div>
          ) : (
            <p className="text-center text-gray-500 py-8">Aucun projet disponible pour le moment.</p>
          )}
        </div>
      </section>

      {/* Actualités */}
      <section className="py-16 bg-gray-50">
        <div className="container mx-auto px-4">
          <div className="flex items-center justify-between mb-8">
            <div>
              <h2 className="text-3xl font-bold mb-2">Actualités</h2>
              <div className="w-20 h-1 bg-primary-600"></div>
            </div>
            <Link to="/news" className="text-primary-600 hover:text-primary-700 font-medium inline-flex items-center gap-1">
              Toutes les actualités
              <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5l7 7-7 7" />
              </svg>
            </Link>
          </div>
          
          {actus.isLoading ? (
            <Loading text="Chargement des actualités..." />
          ) : actus.data?.data?.length > 0 ? (
            <div className="grid md:grid-cols-3 gap-6">
              {actus.data.data.map(a => <NewsCard key={a.id} news={a} />)}
            </div>
          ) : (
            <p className="text-center text-gray-500 py-8">Aucune actualité disponible pour le moment.</p>
          )}
        </div>
      </section>

      {/* Sections Témoignages & Partenaires */}
      <TestimonialsSection />
      <PartnersSection />
    </div>
  );
}
