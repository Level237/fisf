import React from 'react'
import { Button } from './ui/button'
import scrabble from "../assets/scrabble.png";
import tof from "../assets/tof-alexis.jpg";
import { Separator } from './ui/separator';

export default function Rankings() {
    const duplicateRankings = [
        { rank: 1, name: "DESJARDINS Francis", score: "96,84", flag: "ca" },
        { rank: 2, name: "MICHEL Antonin", score: "96,07", flag: <svg width={16} height={16} viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" className="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg>},
        { rank: 3, name: "TESSIER Samson", score: "95,92", flag: <svg width={16} height={16} viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" className="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg> },
      ]
    
      const classicRankings = [
        { rank: 1, name: "DESJARDINS Francis", score: "96,84", flag: "ca" },
        { rank: 2, name: "MICHEL Antonin", score: "96,07", flag: <svg width={16} height={16} viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" className="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg> },
        { rank: 3, name: "TESSIER Samson", score: "95,92", flag: <svg width={16} height={16} viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" className="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg> },
      ]
    
      return (
        <div className="container mx-auto px-4 py-8">
          <div className="grid lg:grid-cols-2 gap-8">
            {/* Rankings Section */}
            <div className="space-y-8 mx-12">
              <div>
              <div className='mb-14'>
              <h2 className='text-[#00723e] text-3xl font-bold'>Classements</h2>
            </div>
                <div>
                <div>
                        <h2 className="text-2xl font-semibold mb-1  text-gray-800">Classement Duplicate</h2>
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
                            
                            <div>
                            <h2 className="text-2xl mb-1 font-semibold text-gray-800">Classement Classique</h2>
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
                </div>
                {/* Duplicate Rankings */}
             
             
                    <div className='flex items-center justify-center'>
                            <Button 
                        className="w-full text-lg md:w-auto bg-red-500 hover:bg-red-600 text-white rounded-full py-6 px-8"
                        >
                        Classement complet
                        </Button>
                    </div>
               
              </div>
            </div>
    
            {/* Featured Player Card */}
            <div className="relative bg-emerald-600  px-1 py-12 rounded-lg overflow-hidden">
            <div style={{ transform: "translate(-50%, -50%)"  }} className='flex w-[27rem] flex-col absolute bottom-[-2rem] justify-center left-[50%] gap-4 items-center z-50'>
                    <img src={scrabble} className='w-[60rem]  ' alt="" />
                    <Button 
                  className="bg-red-500 text-xl hover:bg-red-600 text-white rounded-full py-7 px-12"
                >
                  S'inscrire
                </Button>
                </div>
              <div className="relative z-10 p-8 text-white max-w-[50%]">
                <h2 className="text-xl font-medium mb-4">
                  Devenez un master du Scrabble grace aux conseils et astuces du Champion du monde
                </h2>
                <h3 className="text-5xl font-bold mb-4">
                  Alexis Allagnat
                </h3>
                <p className="mb-8 text-white/90">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
               
               
              </div>
              <div className="absolute right-0 top-0 h-full w-1/2">
                <img
                  src={tof}
                  alt="Alexis Allagnat"
                  width={400}
                  height={600}
                  className="h-full w-full object-cover"
                />
              </div>
            </div>
          </div>
        </div>
      )
}
