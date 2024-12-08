import logo from '../assets/logo-white.png'
import icon from "../assets/icon.png"
import { Input } from './ui/input'
import { Button } from './ui/button'
export const Footer=()=>{

    return (
        <div className="bg-[#00723e] flex flex-col gap-12 w-full mt-5 px-6 py-12">
                <div className="flex justify-between mx-12 items-center">
                        <div className='flex-1'>
                            <img className='w-72 h-full' src={logo} alt="" />
                        </div>
                        <div className='flex flex-row justify-between flex-1 gap-5 items-center'>
                        <div className='flex flex-1 flex-col justify-normal'>
                                    <div>
                                        <h2 className='text-white text-lg font-normal'>Siège social FISF</h2>
                                    </div>
                                    <div>
                                        <h2 className='text-white mt-[-6px] text-lg font-normal'>Avenue Minervve 33</h2>
                                    </div>
                                    <div>
                                        <h2 className='text-white mt-[-6px] text-lg font-normal'>1190 Forest</h2>
                                    </div>
                                    <div>
                                        <h2 className='text-white mt-[-6px] text-lg font-normal'>Belgique</h2>
                                    </div>
                        </div>
                        <div className='flex-1'>
                            <img className='w-24 h-full' src={icon} alt="" />
                        </div>
                        </div>
                        

                        
                </div>
                <div className='flex justify-between mx-12 gap-5 items-center'>
                                    <div className='flex-1'>
                                        <h2 className='text-white w-[29rem] text-lg font-normal'>La Fédération internationale de Scrabble® francophone
                                        (FISF) a pour missions principales de promouvoir la
                                        pratique du Scrabble® en langue française, mais aussi
                                        d’apporter à ce jeu un cadre réglementaire précis,
                                        applicable dans toute la Francophonie.</h2>
                                    </div> 
                                    <div className='flex-1 gap-3 flex flex-col'>
                                        <h2 className='text-white text-lg font-normal'>S'inscrire à la newsletter</h2>
                                        <div className='flex flex-row'>
                                                    <Input placeholder='Mail' type='text' className='bg-white
                                                    placeholder:text-xl
                                                    rounded-none
                                                    w-[26rem]
                                                    h-12
                                                    px-4 py-8'/>
                                                    <Button className='bg-red-500 text-xl text-white rounded-none h-12 py-8'>Valider</Button>
                                        </div>
                                    </div>
                </div>
        </div>
    )
}