
import { Button } from './ui/button'
import { Separator } from './ui/separator';
import Title from './ui/title';
import { Link } from 'react-router-dom';

export default function Rankings() {
    const duplicateRankings = [
        { rank: 1, name: "MICHEL Antonin", score: "96,30", flag: "🇲🇫" },
        { rank: 2, name: "TESSIER Samson", score: "95,96", flag: "🇲🇫"},
        { rank: 3, name: "LACHAUD Jean François", score: "95,86", flag: "🇲🇫" },
        { rank: 4, name: "PIERRE Christian", score: "92,13", flag: "🇧🇪" },
        { rank: 5, name: "HOUILLON Gauthier", score: "89,81", flag: "🇲🇫" },
        { rank: 6, name: "RUCHE Philippe", score: "89,76", flag: "🇧🇪" },
        { rank: 7, name: "BUDRY Etienne", score: "89,40", flag: "🇨🇭" },
        { rank: 8, name: "CHINCHOLLE Thierry", score: "88,67", flag: "🇲🇫" },
        { rank: 9, name: "NKOUETTE C. King", score: "88,08", flag: "🇨🇲" },
        { rank: 10, name: "LEROY Fabien", score: "87,90", flag: "🇲🇫" },
      ]
    
      const classicRankings = [
        { rank: 1, name: "DOUTE Fabien", score: "2077", flag: "🇲🇫" },
        { rank: 2, name: "TESSIER Samson", score: "2O22", flag: "🇲🇫" },
        { rank: 3, name: "HOUILLON Gauthier", score: "2021", flag: "🇲🇫" },
        { rank: 4, name: "DESJARDIN Françis", score: "2017", flag: "🏴󠁣󠁡󠁱󠁣󠁿" },
        { rank: 5, name: "LACHAUD Jean François", score: "2014", flag: "🇲🇫" },
        { rank: 6, name: "SAMOKO Mamadou", score: "2014", flag: "🇨🇮" },
        { rank: 7, name: "GUEREL Jérôme", score: "2006", flag: "🇲🇫" },
        { rank: 8, name: "SEUNANG Patrick U.", score: "1994", flag: "🇨🇲" },
        { rank: 9, name: "POKA Elisée", score: "1990", flag: "🇨🇮" },
        { rank: 10, name: "LECUT Guillaume", score: "1989", flag: "🇲🇫" },
      ]
    
      return (
        <div className="mx-24 max-sm:mx-0 py-8 max-sm:py-2">
          <div className='mb-14 max-sm:mb-12 mx-1'>
          <Title title="Classements"/>
            </div>
          <div className="grid lg:grid-cols-2 gap-8">
            {/* Rankings Section */}
            
              
              
                
                <div className='space-y-2 max-sm:mx-2'>
                        <h2 className="text-xl font-semibold text-gray-800">Classement Duplicate du 09/01/2025</h2>
                        <Separator className='bg-red-500 h-1 mb-4'/>
                        <div className="bg-gray-50 rounded-lg overflow-hidden mb-8">
                        {duplicateRankings.map((item, index) => (
                            <div
                            key={index}
                            className={`flex items-center px-4 py-4 ${
                                index % 2 === 0 ? "bg-gray-50" : "bg-gray-100"
                            }`}
                            >
                            <span className="w-8 font-medium text-gray-700">{item.rank}</span>
                            <span className="flex-1 text-red-500 font-medium">{item.name}</span>
                            <span className="mr-4 text-gray-700 font-medium">{item.score}</span>
                            {item.flag}
                            </div>
                        ))}
                        </div>
                </div>
                            
                            <div className='space-y-2 max-sm:mx-2'>
                            <h2 className="text-xl font-semibold text-gray-800">Classement Classique du 28/1O/2024</h2>
                            <Separator className='bg-red-500 h-1 mb-4'/>
                <div className="bg-gray-50 rounded-lg overflow-hidden mb-8">
                  {classicRankings.map((item, index) => (
                    <div
                      key={index}
                      className={`flex items-center px-4 py-4 ${
                        index % 2 === 0 ? "bg-gray-50" : "bg-gray-100"
                    }`}
                    >
                      <span className="w-8 font-medium text-gray-700">{item.rank}</span>
                      <span className="flex-1 text-red-500 font-medium">{item.name}</span>
                      <span className="mr-4 text-gray-700 font-medium">{item.score}</span>
                      {item.flag}
                    </div>
                  ))}
                </div>
                            </div>
                  
                {/* Duplicate Rankings */}
             
            </div>
            <div className='flex items-center justify-center mt-5'>
              <Link to="/classements"><Button 
                        className="w-full text-lg max-sm:w-auto md:w-auto bg-red-500 hover:bg-red-600 text-white rounded-full py-6 px-8"
                        >
                        Classement complet
                        </Button></Link>
                            
                    </div>
            {/* Featured Player Card */}
            
          </div>
        
      )
}
