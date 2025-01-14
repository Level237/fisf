import { Eye, Heart } from 'lucide-react'
import blog1 from "../assets/blog1.jpg"
import blog2 from "../assets/blog2.jpg"
import { Card, CardContent } from './ui/card'

export default function Blog() {
  return (
    <div className="container mx-auto p-4 mt-12">
    <div className="grid md:grid-cols-2 gap-6">
      {/* First Card */}
      <Card className="overflow-hidden">
        <div className="relative ">
          <img
            src={blog2}
            alt="Drapeaux des pays participants au Simultané mondial"
            className="w-full"
          />
        </div>
        <CardContent className="p-6">
          <h2 className="text-2xl font-bold mb-4">
            35e Simultané mondial (3mn/coup) du 11 janvier
          </h2>
          <p className="text-gray-600 mb-4">
            Le samedi 11 janvier 2025 a lieu le 35e Simultané mondial, épreuve officielle en 2 parties (3mn/coup) tirées aléatoirement et disputées simultanément par plusieurs milliers de joueurs francophones !
          </p>
          <div className="flex items-center justify-between">
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
        </CardContent>
      </Card>

      {/* Second Card */}
      <Card className="overflow-hidden">
        <div className="relative">
          <img
            src={blog1}
            alt="Église de Trois-Rivières"
            className="w-full"
          />
        </div>
        <CardContent className="p-6">
          <h2 className="text-2xl font-bold mb-4">
            53es Championnats du monde de Scrabble francophone
          </h2>
          <p className="text-gray-600 mb-4">
            C&apos;est avec un immense plaisir que la Fédération québécoise des clubs de Scrabble® francophone vous invite à la 53e édition des Championnats du monde de Scrabble® francophone qui auront lieu à Trois-Rivières du 10 au 18 juillet 2025.
          </p>
          <div className="flex items-center justify-between">
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
        </CardContent>
      </Card>
    </div>
  </div>
  )
}
