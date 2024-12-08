import licences from "../assets/licences.png"
import clubs from "../assets/clubs.png"
import federation from "../assets/federation.png"

export default function Figures() {
  return (
    <div className='flex flex-row max-sm:flex-col items-center mt-8 max-sm:gap-12   justify-center'>
      <div className='flex gap-2 mr-24 flex-col max-sm:justify-center max-sm:mr-0  items-center'>
        <img className="w-32 h-32 max-sm:w-28 max-sm:h-28" src={licences} alt="" />
        <div>
            <h2 className='text-5xl max-sm:text-4xl font-bold text-red-700'>4 395</h2>
        </div>
        <div className=''>
            <h2 className='text-2xl text-center  font-bold text-black'>Licences
                <br />
                attribuées</h2>
        </div>
      </div>
      <div className='flex gap-2 mr-24 flex-col max-sm:justify-center max-sm:mr-0  items-center'>
          <img className="w-32 h-32 max-sm:w-28 max-sm:h-28" src={federation} alt="" />
      <div>
            <h2 className='text-5xl max-sm:text-4xl font-bold text-red-700'>4 395</h2>
        </div>
        <div className=''>
            <h2 className='text-2xl text-center  font-bold text-black'>Fédération
                <br />
                affiliées</h2>
        </div>
      </div>
      <div className='flex gap-2 flex-col items-center'>
          <img className="w-32 h-32 max-sm:w-28 max-sm:h-28" src={clubs} alt="" />
      <div>
            <h2 className='text-5xl max-sm:text-4xl font-bold text-red-700'>4 395</h2>
        </div>
        <div className=''>
            <h2 className='text-2xl text-center  font-bold text-black'>Clubs de Scrabble
                <br />
                enregistrés</h2>
        </div>
      </div>
    </div>
  )
}
