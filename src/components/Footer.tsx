import logo from '../assets/logo-white.png'
import icon from "../assets/icon.png"
export const Footer=()=>{

    return (
        <div className="bg-[#00723e] flex flex-col gap-12 w-full mt-5 px-6 py-12">
                <div className="flex justify-between mx-12 items-center">
                        <div className='flex-1'>
                            <img className='w-72 h-full' src={logo} alt="" />
                        </div>
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

                        <div className=''>
                            <img className='w-24 h-full' src={icon} alt="" />
                        </div>
                </div>
                <div className='flex justify-between mx-12 gap-5 items-center'>
                                    <div className='w-[29rem]'>
                                        <h2 className='text-white text-lg font-normal'>La Fédération internationale de Scrabble® francophone
                                        (FISF) a pour missions principales de promouvoir la
                                        pratique du Scrabble® en langue française, mais aussi
                                        d’apporter à ce jeu un cadre réglementaire précis,
                                        applicable dans toute la Francophonie.</h2>
                                    </div> 
                                    <div className='flex-1'>
                                        <h2 className='text-white text-lg font-normal'>S'inscrire à la newsletter</h2>
                                    </div>
                </div>
        </div>
    )
}