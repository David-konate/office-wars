import { Swiper, SwiperSlide } from 'swiper/react';
// import "./Swiper.scss";

import { Navigation } from "swiper/modules";
import ArticleCard from '../cards/ArticleCard';

const defaultBreakpoints = {
  500: {
    slidesPerView: 1,
  },
  640: {
    slidesPerView: 2,
  },
  900: {
    slidesPerView: 3,
  },
}

const SlideSwiper = ({ articles, breakpoints = defaultBreakpoints }) => {
	return (
		<Swiper
			navigation={true}
			modules={[Navigation]}
            spaceBetween={30}
            breakpoints={breakpoints}
			className="slide_swiper"
		>
			{articles.map(article =>{
				return <SwiperSlide key={article.id}>
            <ArticleCard article={article} />
        </SwiperSlide>
			})}
		</Swiper>
	);
};

export default SlideSwiper;
