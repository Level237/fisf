import illustration from "../../assets/illustration.png"

export default function Title({title}:{title:any}) {
  return (
    <div className='flex items-center'>
        <img src={illustration} alt="" className="w-20 h-20" />
        <div>
            <h2 className="text-[#00723e] text-3xl max-sm:text-2xl font-bold">{title}</h2>
        </div>
    </div>
  )
}
