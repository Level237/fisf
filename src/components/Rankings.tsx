
import { Button } from './ui/button'
import scrabble from "../assets/scrabble.png";
import tof from "../assets/tof-alexis.jpg";
import { Separator } from './ui/separator';

export default function Rankings() {
    const duplicateRankings = [
        { rank: 1, name: "MICHEL Antonin", score: "96,30", flag: "ca" },
        { rank: 2, name: "TESSIER Samson", score: "95,96", flag: <svg width={16} height={16} viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" className="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg>},
        { rank: 3, name: "LACHAUD Jean François", score: "95,86", flag: <svg width={16} height={16} viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" className="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg> },
        { rank: 4, name: "PIERRE Christian", score: "92,13", flag: <svg width={16} height={16} viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" className="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg> },
        { rank: 5, name: "HOUILLON Gauthier", score: "89,81", flag: <svg width={16} height={16} viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" className="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg> },
        { rank: 6, name: "RUCHE Philippe", score: "89,76", flag: <svg width={16} height={16} viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" className="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg> },
        { rank: 7, name: "BUDRY Etienne", score: "89,40", flag: <svg width={16} height={16} viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" className="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg> },
        { rank: 8, name: "CHINCHOLLE Thierry", score: "88,67", flag: <svg width={16} height={16} viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" className="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg> },
        { rank: 9, name: "NKOUETTE C. King", score: "88,08", flag: <svg width={16} height={16} viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" className="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg> },
        { rank: 10, name: "LEROY Fabien", score: "87,90", flag: <svg width={16} height={16} viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" className="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg> },
      ]
    
      const classicRankings = [
        { rank: 1, name: "DOUTE Fabien", score: "2077", flag: "ca" },
        { rank: 2, name: "TESSIER Samson", score: "2O22", flag: <svg width={16} height={16} viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" className="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg> },
        { rank: 3, name: "HOUILLON Gauthier", score: "2021", flag: <svg width={16} height={16} viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" className="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg> },
        { rank: 4, name: "DESJARDIN Françis", score: "2017", flag: <svg width={16} height={16} viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" className="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg> },
        { rank: 5, name: "LACHAUD Jean François", score: "2014", flag: <svg width={16} height={16} viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" className="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg> },
        { rank: 6, name: "SAMOKO Mamadou", score: "2014", flag: <svg width={16} height={16} viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" className="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg> },
        { rank: 7, name: "GUEREL Jérôme", score: "2006", flag: <svg width={16} height={16} viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" className="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg> },
        { rank: 8, name: "SEUNANG Patrick U.", score: "1994", flag: <svg width={16} height={16} viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" className="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg> },
        { rank: 9, name: "POKA Elisée", score: "1990", flag: <svg width={16} height={16} viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" className="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg> },
        { rank: 10, name: "LECUT Guillaume", score: "1989", flag: <svg width={16} height={16} viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" className="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg> },
      ]
    
      return (
        <div className="container mx-auto px-4 py-8">
          <div className='mb-14 mx-12'>
              <h2 className='text-[#00723e] text-3xl font-bold'>Classements</h2>
            </div>
          <div className="grid lg:grid-cols-3 gap-2">
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
                            <div className="relative bg-[#00723e]  px-1 py-12 rounded-lg overflow-hidden">
            <div style={{ transform: "translate(-50%, -50%)"  }} className='flex w-[27rem]  flex-col absolute bottom-[-2rem] justify-center left-[50%] gap-4 items-center z-50'>
                    <img src={scrabble} className='w-[22rem] max-sm:hidden  ' alt="" />
                    <Button 
                  className="bg-red-500 max-sm:hidden text-xl hover:bg-red-600 text-white rounded-full py-7 px-12"
                >
                  S'inscrire
                </Button>
                </div>
              <div className="relative z-10 p-8 text-white max-sm:max-w-full max-w-[60%]">
                <h2 className="text-md font-medium mb-4">
                  Devenez un master du Scrabble grace aux conseils et astuces du Champion du monde
                </h2>
                <h3 className="text-5xl font-bold mb-4">
                  Alexis Allagnat
                </h3>
               
               
               <div className='hidden max-sm:block'>
               <Button 
                  className="bg-red-500 text-xl hover:bg-red-600 text-white rounded-full py-7 px-12"
                >
                  S'inscrire
                </Button>
               </div>
              </div>
              <div className="absolute max-sm:hidden right-0 top-0 h-full w-[50%]">
                <img
                  src={tof}
                  alt="Alexis Allagnat"
                  width={400}
                  height={600}
                  className="h-full w-full object-cover"
                />
              </div>
            </div>
                {/* Duplicate Rankings */}
             
            </div>
            <div className='flex items-center justify-center mt-5'>
                            <Button 
                        className="w-full text-lg md:w-auto bg-red-500 hover:bg-red-600 text-white rounded-full py-6 px-8"
                        >
                        Classement complet
                        </Button>
                    </div>
            {/* Featured Player Card */}
            
          </div>
        
      )
}
