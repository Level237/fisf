
import benin from "../assets/benin.png"
import algeria from "../assets/algeria.png"
import angola from "../assets/angola.png"
import burkina from "../assets/burkina.png"
import cmr from "../assets/cameroun.png"
import rca from "../assets/rca.png"
import rdc from "../assets/rdc.png"
import congo from "../assets/congo.png"
import cote from "../assets/cote.png"
import gabon from "../assets/gabon.png"
import guinea from "../assets/guinea.png"
import maurice from "../assets/mauritius.png"
import mali from "../assets/mali.png"
import madagascar from "../assets/madacascar.png"
import mauritanie from "../assets/mauritanie.png"
import niger from "../assets/niger.png"
import senegal from "../assets/senegal-flag-round-medium.png"
import chad from "../assets/chad.png"
import togo from "../assets/togo.png"
import tunisia from "../assets/tunisia.png"
import netherlands from "../assets/netherlands-flag-round-medium.png"
import greece from "../assets/greece-flag-round-medium.png"
import belgique from "../assets/belgique.png"
import french from "../assets/fr.png"
import romanie from "../assets/romania-flag-round-medium.png"
import united from "../assets/united-kingdom-flag-round-medium.png"
import suisse from "../assets/switzerland-flag-round-medium.png"
import amerique from "../assets/amerique.png"
import asie from "../assets/asie.png"
import TooltipChildren from "./ui/TooltipChildren"
import { useNavigate } from "react-router-dom"

export default function AfiliateCountryList() {
    const navigate=useNavigate();
  return (
     <section>
        <div className='mx-12 max-sm:mx-3 border mt-16 relative border-[#00723e] py-16'>
      <div className='flex justify-center max-sm:justify-start flex-col items-center'>
            <div className='grid max-sm:gap-y-8  max-sm:mb-8 max-sm:grid-cols-3 grid-cols-8 gap-4'>
                    <div className="cursor-pointer" onClick={()=>navigate("/pays-affilies/algeria")}>
                        <TooltipChildren title="Algeria"><img src={algeria} className="w-20 h-20 object-cover rounded-3xl" alt="" /></TooltipChildren>
                        
                    </div>
                    <div className="cursor-pointer" onClick={()=>navigate("/pays-affilies/angola")}>
                    <TooltipChildren title="Angola"><img src={angola} className="w-20 h-20 object-cover rounded-3xl" alt="" /></TooltipChildren>
                    </div>
                   
                    <div className="cursor-pointer" onClick={()=>navigate("/pays-affilies/benin")}>
                    <TooltipChildren title="Benin"><img src={benin} className="w-20 h-20 object-cover rounded-3xl" alt="" /></TooltipChildren>
                    </div>
                    <div className="cursor-pointer" onClick={()=>navigate("/pays-affilies/burkina")}>
                    <TooltipChildren title="Burkina"><img src={burkina} className="w-20 h-20 object-cover rounded-3xl" alt="" /></TooltipChildren>
                    </div>
                    <div className="cursor-pointer" onClick={()=>navigate("/pays-affilies/cameroun")}>
                    <TooltipChildren title="Cameroun"><img src={cmr} className="w-20 h-20 object-cover rounded-3xl" alt="" /></TooltipChildren>
                    </div>
                    <div className="cursor-pointer" onClick={()=>navigate("/pays-affilies/rca")}>
                    <TooltipChildren title="rca"><img src={rca} className="w-20 h-20 object-cover rounded-3xl" alt="" /></TooltipChildren>
                    </div>
                    <div className="cursor-pointer" onClick={()=>navigate("/pays-affilies/rdc")}>
                        <img src={rdc} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
                    <div className="cursor-pointer" onClick={()=>navigate("/pays-affilies/congo")}>
                        <img src={congo} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
            </div>
            <div className='grid max-sm:gap-y-8  max-sm:mb-8 max-sm:grid-cols-3 grid-cols-8 mt-5 gap-4'>
                    <div className="cursor-pointer">
                        <img src={cote} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
                    <div className="cursor-pointer">
                        <img src={gabon} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
                    <div className="cursor-pointer">
                        <img src={guinea} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
                    <div className="cursor-pointer">
                        <img src={maurice} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
                    <div className="cursor-pointer">
                        <img src={madagascar} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
                    <div className="cursor-pointer">
                        <img src={mali} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
                    <div className="cursor-pointer">
                        <img src={mauritanie} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
                    <div className="cursor-pointer">
                        <img src={niger} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
                   
            </div>
            <div className='flex items-center max-sm:grid-cols-3 max-sm:grid gap-4 mt-4 justify-center'>
            <div>
                        <img src={senegal} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
                    <div>
                        <img src={chad} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
                    <div>
                        <img src={togo} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
                    <div>
                        <img src={tunisia} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
            </div>
            
      </div>
      <div className='bg-red-500 absolute top-[-20px] left-5 px-8 py-2'>
            <h2 className='text-white font-bold text-3xl'>Zone Afrique</h2>
      </div>
    </div>
    <div className='mx-12 max-sm:mx-4 border mt-16 relative border-[#00723e] py-16'>
      <div className='flex justify-center flex-col items-center'>
            <div className='grid max-sm:grid-cols-3 grid-cols-8 gap-4'>
                    <div>
                        <img src={belgique} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
                    <div>
                        <img src={french} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
                   
                    <div>
                        <img src={greece} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
                    <div>
                        <img src={netherlands} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
                    <div>
                        <img src={romanie} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
                    <div>
                        <img src={united} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
                    <div>
                        <img src={suisse} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
            </div>
      </div>
      <div className='bg-red-500 absolute top-[-20px] left-5 px-8 py-2'>
            <h2 className='text-white font-bold text-3xl'>Zone Europe</h2>
      </div>
    </div>
    <div className='flex max-sm:flex-col items-center'>
    <div className='mx-12  max-sm:mx-12 w-[90%] flex-1 border mt-16 relative border-[#00723e] py-16'>
      <div className='flex   justify-center flex-col items-center'>
            <div className='flex  max-sm:flex-col flex-1 gap-12  items-center justify-between'>
            <div className='bg-red-500 px-8 py-2'>
            <h2 className='text-white font-bold text-3xl'>Zone Amérique</h2>
      </div>
                    <div>
                        <img src={amerique} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
                    
            </div>
      </div>
     
    </div>
    <div className='border flex-1 mr-12 max-sm:mr-6 w-[90%] mt-16 relative border-[#00723e] py-16'>
      <div className='flex  justify-center flex-col items-center'>
            <div className='flex max-sm:flex-col flex-1 gap-12  items-center justify-between'>
            <div className='bg-red-500 px-8 py-2'>
            <h2 className='text-white font-bold text-3xl'>Zone Asie</h2>
      </div>
                    <div>
                        <img src={asie} className="w-20 h-20 object-cover rounded-3xl" alt="" />
                    </div>
                    
            </div>
      </div>
     
    </div>
    </div>
     </section>
  )
}
