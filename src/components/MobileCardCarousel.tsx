import Autoplay from "embla-carousel-autoplay"

import { Carousel, CarouselContent, CarouselItem, CarouselNext, CarouselPrevious } from "@/components/ui/carousel"
import { Link } from "react-router-dom"
import slide from "../assets/slide01.jpg"
import slide3 from "../assets/blog1.jpg"
import slide2 from "../assets/slide02.jpg"
import { Card, CardContent } from "./ui/card"
import React from "react"

// Données factices pour les cartes


export default function MobileCardCarousel() {
    const plugin = React.useRef(
        Autoplay({ delay: 2000, stopOnInteraction:false, stopOnMouseEnter: true })
      )
  return (
    <div className="w-full max-w-sm mx-auto px-4">
      <Carousel
        opts={{
          align: "start",
          loop: true,
        }}
        plugins={[plugin.current]}
        className="w-full"
      >
        <CarouselContent>
          
            <CarouselItem key={`1`} className="md:basis-1/2 lg:basis-1/3">
            <Card className="overflow-hidden  border-[0.1rem] border-[#107a5f] mb-8 rounded-3xl">
          <Link to={``} className="block">
            
            <CardContent className="p-6 flex max-sm:flex-col items-center gap-6 ">
            <div className="relative max-sm:w-full w-56">
              <img
                src={slide}
               alt="Amédée ASSOMO"

                className="w-full rounded-3xl h-56 object-cover"
              />
             <div className=" bg-red-500 absolute max-sm:px-4 max-sm:py-4 bottom-[-10px] left-5  z-50 text-white px-2 py-1 rounded-xl ">
            <div className="text-md font-medium">NOV</div>
            <div className="text-md mt-[-5px] font-medium">2024</div>
          </div>
            </div>
            <div className="flex flex-col flex-1">
                <div>
                    <h2 className="text-xl font-semibold mb-2">
                    Amédée ASSOMO est le nouveau président de la FISF
                </h2>
                </div>
                <div>
                        <p className="text-gray-600 text-sm mb-4">
                        Après 19 ans à la tete de la FISF (2005-2024), Patrice JEANNERET a décidé de passer le flambeau. Un grand MERCI et BRAVO pour tout son travail, son engagement et sa sympathie.
                    </p>
                </div>
              <div className="flex justify-end">
                <Link to={`/actualités/nouveau-president`}><span className="text-red-500 hover:underline">Lire plus</span></Link>
                    
              </div>
              
            </div>
              
            </CardContent>
          </Link>
        </Card>
            </CarouselItem>
            <CarouselItem key={`2`} className="md:basis-1/2 lg:basis-1/3">
            <Card className="overflow-hidden  border-[0.1rem] border-[#107a5f] mb-8 rounded-3xl">
          <Link to={``} className="block">
            
            <CardContent className="p-6 flex max-sm:flex-col items-center gap-6 ">
            <div className="relative max-sm:w-full w-56">
              <img
                src={slide2}
                alt="Super Masters Scrabble"

                className="w-full rounded-3xl h-56 object-cover"
              />
             <div className=" bg-red-500 absolute bottom-[-10px] left-5  z-50 text-white max-sm:px-4 max-sm:py-4 px-2 py-1 rounded-xl ">
            <div className="text-md font-medium">DEC</div>
            <div className="text-md mt-[-5px] font-medium">2024</div>
          </div>
            </div>
            <div className="flex flex-col flex-1">
                <div>
                    <h2 className="text-xl font-semibold mb-2">
                    Les Super Masters Scrabble se préparent au Cameroun en 2005
                </h2>
                </div>
                <div>
                        <p className="text-gray-600 text-sm mb-4">
                        Les élites du Scrabble des catégories duplicate et classique se défient pour remporter le titre supreme du Super Master Scrabble
                    </p>
                </div>
              <div className="flex justify-end">
                    <span className="text-red-500 hover:underline">Lire plus</span>
              </div>
              
            </div>
              
            </CardContent>
          </Link>
        </Card>
            </CarouselItem>
            <CarouselItem key={`3`} className="md:basis-1/2 lg:basis-1/3">
            <Card className="overflow-hidden  border-[0.1rem] border-[#107a5f] mb-8 rounded-3xl">
          <Link to={``} className="block">
            
            <CardContent className="p-6 flex max-sm:flex-col items-center gap-6 ">
            <div className="relative max-sm:w-full w-56">
              <img
                src={slide3}
                alt="Super Masters Scrabble"

                className="w-full rounded-3xl h-56 object-cover"
              />
             <div className=" bg-red-500 absolute max-sm:px-4 max-sm:py-4 bottom-[-10px] left-5  z-50 text-white px-2 py-1 rounded-xl ">
            <div className="text-md font-medium">DEC</div>
            <div className="text-md mt-[-5px] font-medium">2024</div>
          </div>
            </div>
            <div className="flex flex-col flex-1">
                <div>
                    <h2 className="text-xl font-semibold mb-2">
                    53es Championnats du monde de Scrabble francophone
                </h2>
                </div>
                <div>
                        <p className="text-gray-600 text-sm mb-4">
                        C'est avec un immense plaisir que la fédération québécoise des clubs de Scrabble francophone vous invite à la 53e Edition des Championnats du monde de Scrabble francophone qui auront lieu à Trois-Rivieres du 10 au 18 juillet 2025.
                    </p>
                </div>
              <div className="flex justify-end">
                    <span className="text-red-500 hover:underline">Lire plus</span>
              </div>
              
            </div>
              
            </CardContent>
          </Link>
        </Card>
            </CarouselItem>
        </CarouselContent>
        <CarouselPrevious />
        <CarouselNext />
      </Carousel>
    </div>
  )
}

