import React from 'react'
import presi from "../assets/president.jpg"
import { Eye, Heart } from 'lucide-react'
export default function AlaUneComponent() {
  return (
    <article className="mt-12">
      <div className="relative flex flex-col md:flex-row items-center gap-6">
        {/* Image container */}
        <div className="relative flex-shrink-0 md:w-[48%] bg-gray-300 rounded-lg">
          <div className="relative w-full  ">
            <img
              src={presi}
              alt="Portrait du nouveau président"
              className=" rounded-lg h-full"
            />
          </div>
          {/* Date badge */}
          <div className="absolute left-4 top-4 bg-red-500 text-white p-3 rounded-lg">
            <div className="text-2xl font-bold leading-tight">NOV</div>
            <div className="text-2xl font-bold leading-tight">2024</div>
          </div>
        </div>

        {/* Content */}
        <div className="flex-1 space-y-4">
          <h1 className="text-2xl md:text-3xl font-bold">
            Amédée ASSOMO est le nouveau président de la Fédération International de Scrabble Francophone
          </h1>
          
          <div className="w-20 h-1 bg-green-600" />
          
          <div className="space-y-4 text-gray-700">
            <p>
              Lundi 16 juillet 2024 a eu lieu l&apos;élection du nouveau CA de la FISF.
            </p>
            <p>
              Après 19 ans à la tête de la FISF (2005-2024), Patrice JEANNERET a décidé de passer le flambeau. Un grand MERCI et BRAVO pour tout son travail, son engagement et sa sympathie.
            </p>
          </div>

          <div className="flex items-center justify-between pt-4">
            <a href="#" className="text-red-500 hover:text-red-600 font-medium">
              Lire la suite
            </a>
            <div className="flex items-center gap-4 text-gray-600">
              <div className="flex items-center gap-1">
                <Eye className="w-5 h-5" />
                <span>125</span>
              </div>
              <div className="flex items-center gap-1">
                <Heart className="w-5 h-5" />
                <span>125</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
  )
}
