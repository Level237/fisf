import { Card, CardContent } from "@/components/ui/card"
import { Link } from "react-router-dom"
import slide from "../assets/slide01.jpg"
export default function Actuality() {
  return (
    <div className="container mx-auto p-4 grid gap-6 md:grid-cols-2 lg:max-w-7xl">
    {/* Main Featured Article */}
    <Card className="overflow-hidden border-2 border-gray-100 rounded-3xl">
      <Link to={``} className="block">
        <div className="relative mx-4 my-4 ">
          <img
            src={slide}
            alt="Amédée ASSOMO"
            width={300}
            height={400}
            className="w-full rounded-2xl h-96 object-cover"
          />
        
         
        </div>
        <CardContent className="p-6">
        <div className="flex items-start gap-4">
          <div className=" bg-red-500 mt-[-4rem] z-50 text-white p-6 rounded-3xl ">
            <div className="text-5xl font-semibold">NOV</div>
            <div className="text-5xl font-semibold">2025</div>
          </div>
          <div className="mt-[-1rem]">
          <h2 className="text-lg font-semibold mb-2">
            Amédée ASSOMO est le nouveau président de la FISF
          </h2>
          <p className="text-gray-600 text-sm mb-4">
            Lorem ipsum dolor sit amet. Hic sunt eveniet est repellendus do lorem et fugiat excepturi qui sunt commodi est galisum ducimus.
          </p>
          <div className="flex justify-end">
          <span className="text-red-500 text-end hover:underline">Lire plus</span>
          </div>
          
          </div>
          </div>
          
        </CardContent>
      </Link>
    </Card>

    {/* Secondary Articles Column */}
    <div className="space-y-6">
      {[1, 2].map((index) => (
        <Card key={index} className="overflow-hidden border-2 border-gray-100 rounded-3xl">
          <Link to={``} className="block">
            <div className="relative">
              <img
                src="/placeholder.svg?height=300&width=600"
                alt="Super Masters Scrabble"
                width={100}
                height={9}
                className="w-full object-cover"
              />
              <div className="absolute bottom-0 left-0 bg-red-500 text-white p-4 rounded-tr-2xl">
                <div className="text-2xl font-bold">NOV</div>
                <div className="text-3xl font-bold">2025</div>
              </div>
            </div>
            <CardContent className="p-6">
              <h2 className="text-xl font-semibold mb-2">
                Les Super Masters Scrabble se préparent au Cameroun en 2005
              </h2>
              <p className="text-gray-600 mb-4">
                Lorem ipsum dolor sit amet. Hic sunt eveniet est repellendus do lorem et fugiat excepturi qui sunt commodi est galisum ducimus.
              </p>
              <span className="text-red-500 hover:underline">Lire plus</span>
            </CardContent>
          </Link>
        </Card>
      ))}
    </div>
  </div>
  )
}
